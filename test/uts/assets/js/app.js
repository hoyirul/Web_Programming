const progress = document.querySelector('.progress-done');
const target = +progress.getAttribute('data-done');
const speed = 2000;
const inc = target / speed;
let count = 0;


function upCount() {
    count = count + inc;

    if (count <= target) {

        if (Math.round(count) < 5) {
            progress.style.transform = `scale(${(count / 6)})`;
            progress.style.opacity = .8;
        } else {
            progress.style.transform = `scale(1)`;
            progress.innerText = Math.round(count) + "%";
            progress.style.opacity = 1;
        }
        progress.style.width = count + "%";

        setTimeout(upCount, 1);
    } else {
        count.innerText = location.href = 'index.html';
    }
}
upCount();