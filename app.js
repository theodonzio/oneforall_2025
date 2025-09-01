var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'))
dropdownElementList.forEach(function (dropdownToggleEl) {
  new bootstrap.Dropdown(dropdownToggleEl, {
    offset: [-10, 20]  // desplaza el dropdown 60px hacia arriba
  })
})