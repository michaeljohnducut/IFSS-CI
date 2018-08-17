(function() {
	'use strict';

	var optimizer = new pso.Optimizer();
	var iterationNMax = 20;
	var initialPopulationSize;
	var circles = [];
	var searchSpaceSize = 500;

	var domain = [new pso.Interval(0, searchSpaceSize), new pso.Interval(0, searchSpaceSize)];

	var objectiveFunction = function (x) {
		var distToClosestCircle = circles.reduce(function (prev, circle) {
			var dist = Math.sqrt(Math.pow(circle.x - x[0], 2) + Math.pow(circle.y - x[1], 2));
			dist -= circle.radius;
			return Math.min(dist, prev);
		}, Infinity);

		return Math.min(
			distToClosestCircle,
			x[0],
			x[1],
			searchSpaceSize - x[0],
			searchSpaceSize - x[1]
		);
	};

	function getRandomColor() {
		var angle = Math.random() * 2 * Math.PI;
		var r = Math.floor((Math.sin(angle) + 1) / 2 * 255);
		var g = Math.floor((Math.sin(angle + Math.PI * 2 / 3) + 1) / 4 * 255);
		var b = Math.floor((Math.sin(angle + Math.PI * 4 / 3) + 1) / 16 * 255);

		return 'rgb(' + r + ',' + g + ',' + b + ')';
	}

	function reset() {
		circles = [];
		Draw.clear();
	}

	function best() {
		updateParameters();

		optimizer.init(initialPopulationSize, domain);

		for (var i = 0; i < iterationNMax; i++) {
			optimizer.step();
		}

		var position = optimizer.getBestPosition();
		var radius = optimizer.getBestFitness();

		Draw.fillColor(getRandomColor());
		Draw.circle(position[0], position[1], radius);

		circles.push({
			x: position[0],
			y: position[1],
			radius: radius
		});
	}

	function randomCircle(minRadius) {
		minRadius = minRadius || 0;

		while (true) {
			var x = Math.random() * searchSpaceSize;
			var y = Math.random() * searchSpaceSize;
			var radius = objectiveFunction([x, y]);
			if (radius >= minRadius) {
				return {
					x: x,
					y: y,
					radius: radius
				};
			}
		}
	}

	function randMax() {
		var point = randomCircle();

		Draw.fillColor(getRandomColor());
		Draw.circle(point.x, point.y, point.radius);

		circles.push(point);
	}

	function randRand() {
		var point = randomCircle(16);

		point.radius *= 0.5 * Math.random() + 0.4;

		Draw.fillColor(getRandomColor());
		Draw.circle(point.x, point.y, point.radius);

		circles.push(point);
	}

    function updateParameters() {
        iterationNMax = parseInt(document.getElementById('inp_niter').value);

        initialPopulationSize = parseInt(document.getElementById('inp_popinit').value);
        var inertiaWeight = parseFloat(document.getElementById('inp_inertia').value);
        var social = parseFloat(document.getElementById('inp_social').value);
        var personal = parseFloat(document.getElementById('inp_personal').value);

        optimizer.setOptions({
            inertiaWeight: inertiaWeight,
            social: social,
            personal: personal
        });
    }

	function setup() {
		Draw.init(document.getElementById('canvascircles'));

		function createSliderPair(sliderId, inputId) {
			associateSlider(
				document.getElementById(sliderId),
				document.getElementById(inputId)
			);
		}

		[
			['slider_niter', 'inp_niter'],
			['slider_popinit', 'inp_popinit'],
			['slider_inertia', 'inp_inertia'],
			['slider_social', 'inp_social'],
			['slider_personal', 'inp_personal']
		].forEach(function (pair) {
			createSliderPair.apply(null, pair);
		});

		document.getElementById('but_reset').addEventListener('click', reset);
		document.getElementById('but_best').addEventListener('click', best);
		document.getElementById('but_rand_max').addEventListener('click', randMax);
		document.getElementById('but_rand_rand').addEventListener('click', randRand);

		optimizer.setObjectiveFunction(objectiveFunction);

		Draw.clearColor('#FFF');
		Draw.lineColor('#000');

		randRand();
		randRand();
	}

	setup();
})();
