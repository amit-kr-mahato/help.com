let moreCategories = document.getElementById("moreCategories");
let isShow = false;

function toggleCategories(event) {
    event.preventDefault(); // Prevent the default anchor click behavior
    if (isShow) {
        moreCategories.style.display = "none";
        isShow = false;
    } else {
        moreCategories.style.display = "block";
        isShow = true;
    }
}


// --------------------------show more content---------------------------------
document.addEventListener('DOMContentLoaded', function() {
    const readMoreLink = document.querySelector('.read-more');
    const fullParagraph = document.querySelector('.full-paragraph');
  
    readMoreLink.addEventListener('click', function(event) {
      event.preventDefault(); // Prevent the default anchor behavior
      fullParagraph.style.display = fullParagraph.style.display === 'none' ? 'block' : 'none';
      readMoreLink.textContent = fullParagraph.style.display === 'block' ? 'Read less' : 'Read more';
    });
  });
  





