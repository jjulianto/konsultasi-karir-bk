function scrollFunction() {
    let e = document.getElementById("el1");
    e.scrollIntoView({
      block: 'start',
      behavior: 'smooth',
      inline: 'start'
    });
  }