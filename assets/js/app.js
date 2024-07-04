// start go to paragraph
function goToParagraph(paragraphId) {
    var paragraph = document.getElementById(paragraphId);
    paragraph.scrollIntoView({ behavior: 'smooth' });
}
// end go to paragraph

// start change view-more btn
const collapseElement = document.getElementById('collapseExample');
const viewMoreButton = document.querySelector('.view-more a');

collapseElement.addEventListener('show.bs.collapse', () => {
    viewMoreButton.innerHTML = 'View Less <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="m6.293 13.293 1.414 1.414L12 10.414l4.293 4.293 1.414-1.414L12 7.586z"></path></svg>';
});

collapseElement.addEventListener('hide.bs.collapse', () => {
    viewMoreButton.innerHTML = 'View More <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z"></path></svg>';
});
// end change view-more btn

// start header carousel
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) { myIndex = 1 }
    x[myIndex - 1].style.display = "block";
    setTimeout(carousel, 3500);
}
// end header carousel