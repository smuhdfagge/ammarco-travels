import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const revealObserver = new IntersectionObserver((entries, observer) => {
	entries.forEach((entry) => {
		if (!entry.isIntersecting) return;

		entry.target.classList.add('is-visible');
		observer.unobserve(entry.target);
	});
}, { threshold: 0.12 });

document.querySelectorAll('.reveal').forEach((element) => revealObserver.observe(element));

const counterObserver = new IntersectionObserver((entries, observer) => {
	entries.forEach((entry) => {
		if (!entry.isIntersecting) return;

		entry.target.querySelectorAll('.counter').forEach((counter) => {
			const target = Number(counter.dataset.target);
			const suffix = counter.dataset.suffix || '';
			const duration = 850;
			const start = performance.now();

			const tick = (now) => {
				const progress = Math.min((now - start) / duration, 1);
				counter.textContent = `${Math.floor(progress * target)}${suffix}`;
				if (progress < 1) requestAnimationFrame(tick);
			};

			requestAnimationFrame(tick);
		});
		observer.unobserve(entry.target);
	});
}, { threshold: 0.35 });

document.querySelectorAll('.stats-panel').forEach((element) => counterObserver.observe(element));
