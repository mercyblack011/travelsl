// ── PRELOADER ──────────────────────────────────────────────────────────────
window.addEventListener('load', function () {
    setTimeout(function () {
        var preloader = document.getElementById('preloader');
        if (preloader) preloader.classList.add('hidden');
    }, 600);
});

// ── HAMBURGER / MOBILE MENU ────────────────────────────────────────────────
var hamburger  = document.getElementById('hamburger');
var mobileMenu = document.getElementById('mobileMenu');
var menuClose  = document.getElementById('menuClose');

if (hamburger) {
    hamburger.addEventListener('click', function () {
        mobileMenu.classList.add('open');
        document.body.style.overflow = 'hidden';
    });
}
if (menuClose) {
    menuClose.addEventListener('click', function () {
        mobileMenu.classList.remove('open');
        document.body.style.overflow = '';
    });
}
document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && mobileMenu) {
        mobileMenu.classList.remove('open');
        document.body.style.overflow = '';
    }
});

// ── FILTER BUTTONS ─────────────────────────────────────────────────────────
document.addEventListener('DOMContentLoaded', function () {

    var filterBtns = document.querySelectorAll('.filter_btn');
    var countEl    = document.getElementById('filterCount');

    filterBtns.forEach(function (btn) {
        btn.addEventListener('click', function () {

            // 1. Swap active class
            filterBtns.forEach(function (b) { b.classList.remove('active'); });
            this.classList.add('active');

            // trim + lowercase both sides — fixes any DB leading/trailing space bugs
            var selected = this.getAttribute('data-category').trim().toLowerCase();
            var count    = this.getAttribute('data-count');

            // 2. Query cards fresh on every click
            var cards   = document.querySelectorAll('#cardsGrid .card');
            var visible = 0;

            cards.forEach(function (card) {
                var cardCat = (card.getAttribute('data-category') || '').trim().toLowerCase();

                if (selected === 'all' || cardCat === selected) {
                    card.style.display = '';
                    visible++;
                } else {
                    card.style.display = 'none';
                }
            });

            // 3. Update result count
            if (countEl) {
                countEl.textContent = (count ? count : visible) + ' Results Found';
            }

            // 4. Remove old no-match message
            var existingMsg = document.querySelector('.no-results-filter');
            if (existingMsg) existingMsg.remove();

            // 5. Show no-match message if nothing visible
            if (visible === 0) {
                var grid = document.getElementById('cardsGrid');
                if (grid) {
                    var msg = document.createElement('div');
                    msg.className = 'no-results-filter';
                    msg.style.cssText = 'grid-column:1/-1;text-align:center;padding:60px 20px;color:#666;font-size:14px;font-weight:600;';
                    msg.textContent = 'No places found for this category.';
                    grid.appendChild(msg);
                }
            }
        });
    });

});