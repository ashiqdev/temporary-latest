// navigation buttons
const contactbtn = document.querySelector('.contactbtn');
const homebtn = document.querySelector('.homebtn');
const blogbtn = document.querySelector('.blogbtn');

// different sections of the site
const contactSection = document.querySelector('.contact');
const indexSection = document.querySelector('.index');
const blogSection = document.querySelector('.blog');

homebtn.addEventListener('click', function () {
  contactSection.style.display = 'none';
  blogSection.style.display = 'none';
  indexSection.style.display = 'block';

  const state = {};
  const title = '';

  const url = '/';
  history.pushState(state, title, url);
});

contactbtn.addEventListener('click', function () {
  indexSection.style.display = 'none';
  blogSection.style.display = 'none';
  contactSection.style.display = 'block';

  const state = {};
  const title = '';
  const url = 'contact';
  history.pushState(state, title, url);
});

blogbtn.addEventListener('click', function () {
  indexSection.style.display = 'none';
  contactSection.style.display = 'none';
  blogSection.style.display = 'block';

  const state = {};
  const title = '';
  const url = 'blog';
  history.pushState(state, title, url);
});

console.log({ test: window.location.pathname });

// hide/display content based on path name
switch (window.location.pathname) {
  case '/blog':
    // show blog page
    indexSection.style.display = 'none';
    contactSection.style.display = 'none';
    blogSection.style.display = 'block';
    break;

  case '/contact':
    // show contact page
    indexSection.style.display = 'none';
    blogSection.style.display = 'none';
    contactSection.style.display = 'block';
    break;
}

function showBlogSection() {
  indexSection.style.display = 'none';
  contactSection.style.display = 'none';
  blogSection.style.display = 'block';
}

function showContactPage() {
  indexSection.style.display = 'none';
  blogSection.style.display = 'none';
  contactSection.style.display = 'block';
}
