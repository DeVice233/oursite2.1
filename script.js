const btn = document.getElementById('btn')
const first = document.getElementById('first')
const second = document.getElementById('second')

btn.addEventListener("click", () => {
    first.classList.toggle('active');
    second.classList.toggle('active');
})