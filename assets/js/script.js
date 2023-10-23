window.addEventListener('DOMContentLoaded', () => {
    const modalButtons = document.querySelectorAll('.section-catalog-list__item__link');
    const closeModalButtons = document.querySelectorAll('.modal__content-close');

    const hideModal = (target) => {
        const parent = target.closest('.modal');
        parent.classList.remove('active');
    }
    
    const openModal = (target) => {
        document.querySelector(`#${target.getAttribute('data-modal')}`).classList.add('active')
    };

    modalButtons.forEach((el) => el.addEventListener('click', (e) => openModal(e.target)));
    closeModalButtons.forEach((el) => el.addEventListener('click', (e) => hideModal(e.target)));
});