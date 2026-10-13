/**
 * Photovia theme interactions.
 *
 * Scroll reveals, animated counters, simple lightbox, back-to-top button.
 * All motion is disabled when the user prefers reduced motion.
 */
(function () {
	'use strict';

	var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

	/* ---------- Scroll reveal ---------- */
	var revealEls = document.querySelectorAll('.photovia-reveal');

	if (revealEls.length && !reduceMotion && 'IntersectionObserver' in window) {
		var revealObserver = new IntersectionObserver(function (entries) {
			entries.forEach(function (entry) {
				if (entry.isIntersecting) {
					entry.target.classList.add('is-visible');
					revealObserver.unobserve(entry.target);
				}
			});
		}, { threshold: 0.12 });

		revealEls.forEach(function (el) {
			revealObserver.observe(el);
		});
	} else {
		revealEls.forEach(function (el) {
			el.classList.add('is-visible');
		});
	}

	/* ---------- Animated counters ---------- */
	var counters = document.querySelectorAll('.photovia-count');

	function animateCount(el) {
		var target = parseInt(el.getAttribute('data-count'), 10) || 0;
		var suffix = el.getAttribute('data-suffix') || '';
		var duration = 1600;
		var start = null;

		if (reduceMotion) {
			el.textContent = target.toLocaleString('en-US') + suffix;
			return;
		}

		function step(timestamp) {
			if (!start) {
				start = timestamp;
			}
			var progress = Math.min((timestamp - start) / duration, 1);
			/* Ease out cubic. */
			var eased = 1 - Math.pow(1 - progress, 3);
			el.textContent = Math.round(target * eased).toLocaleString('en-US') + suffix;
			if (progress < 1) {
				window.requestAnimationFrame(step);
			}
		}

		window.requestAnimationFrame(step);
	}

	if (counters.length && 'IntersectionObserver' in window) {
		var countObserver = new IntersectionObserver(function (entries) {
			entries.forEach(function (entry) {
				if (entry.isIntersecting) {
					animateCount(entry.target);
					countObserver.unobserve(entry.target);
				}
			});
		}, { threshold: 0.4 });

		counters.forEach(function (el) {
			el.classList.add('is-visible');
			countObserver.observe(el);
		});
	} else {
		counters.forEach(animateCount);
	}

	/* ---------- Simple lightbox ---------- */
	var lightbox = document.createElement('div');
	lightbox.className = 'photovia-lightbox';
	lightbox.setAttribute('role', 'dialog');
	lightbox.setAttribute('aria-label', 'Image viewer');
	lightbox.style.cssText = 'display:none;position:fixed;inset:0;z-index:1000;background:rgba(5,5,5,.94);align-items:center;justify-content:center;cursor:zoom-out;';
	var lightboxImg = document.createElement('img');
	lightboxImg.style.cssText = 'max-width:92vw;max-height:88vh;border-radius:8px;box-shadow:0 24px 80px rgba(0,0,0,.6);';
	lightbox.appendChild(lightboxImg);
	document.body.appendChild(lightbox);

	function openLightbox(src, alt) {
		lightboxImg.src = src;
		lightboxImg.alt = alt || '';
		lightbox.style.display = 'flex';
		document.body.style.overflow = 'hidden';
	}

	function closeLightbox() {
		lightbox.style.display = 'none';
		lightboxImg.removeAttribute('src');
		document.body.style.overflow = '';
	}

	lightbox.addEventListener('click', closeLightbox);
	document.addEventListener('keydown', function (e) {
		if (e.key === 'Escape' && lightbox.style.display === 'flex') {
			closeLightbox();
		}
	});

	document.querySelectorAll('.photovia-lightbox-hint').forEach(function (el) {
		var targets;
		if (el.classList.contains('wp-block-gallery')) {
			/* Gallery: open the exact image that was clicked. */
			targets = el.querySelectorAll('img');
		} else {
			targets = [el];
		}
		targets.forEach(function (target) {
			target.addEventListener('click', function (e) {
				var img = target.tagName === 'IMG' ? target : target.querySelector('img');
				if (img && img.src) {
					e.preventDefault();
					openLightbox(img.src, img.alt);
				}
			});
		});
	});

	/* ---------- Back to top ---------- */
	var toTop = document.createElement('button');
	toTop.className = 'photovia-to-top';
	toTop.setAttribute('type', 'button');
	toTop.setAttribute('aria-label', 'Back to top');
	toTop.innerHTML = '&uarr;';
	document.body.appendChild(toTop);

	toTop.addEventListener('click', function () {
		window.scrollTo({ top: 0, behavior: reduceMotion ? 'auto' : 'smooth' });
	});

	window.addEventListener('scroll', function () {
		if (window.scrollY > 600) {
			toTop.classList.add('is-visible');
		} else {
			toTop.classList.remove('is-visible');
		}
	}, { passive: true });
})();
