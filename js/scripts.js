;(function ($, root, undefined) {
  $(function () {
    'use strict'
    $(document).ready(function () {
      function navScrollTop () {
        if (window.scrollY >= 300) {
          header.classList.add('notScrollTop')
        } else {
          header.classList.remove('notScrollTop')
        }
      }
      navScrollTop()
      window.addEventListener('scroll', navScrollTop)
    })

    const header = document.querySelector('header')
    const adminbar = document.querySelector('#wpadminbar')

    function headerTopMargin () {
      if (document.body.classList.contains('admin-bar')) {
        if (header) {
          header.style.marginTop = adminbar.clientHeight + 'px'
        }
      }
      let margin = header.clientHeight
      document.body.style.marginTop = margin + 'px'
    }
    headerTopMargin()
    window.addEventListener('resize', headerTopMargin)

    function footerBottom () {
      const footer = document.querySelector('footer')
      const main = document.querySelector('main')
      if (main)
        main.style.minHeight = window.innerHeight - footer.scrollHeight - header.scrollHeight + 'px'
    }
    footerBottom()
    window.addEventListener('resize', footerBottom)

    var scrollBoxes = document.querySelectorAll('.feature__content')

    function removeClass (list) {
      if (!list) return false
      list.forEach(item => {
        item.classList.remove('active')
      })
    }

    var tourObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          var el = entry.target
          activateFeature(el)
        }
      })
    }, {
      root: null,
      rootMargin: getRootMargin(),
      threshold: [0, 1]
    })

    function getRootMargin () {
      if (window.innerWidth < 640) {
        return '-20% 0px -79% 0px'
      } else {
        return '-49% 0px -49% 0px'
      }
    }

    var activateFeatureFromImage = e => {
      var el = e.target.querySelector('.feature__image')
      if (!el) return
      activateFeature(el)
    }

    var tourImages = document.querySelectorAll('.feature__image')
    tourImages.forEach(image => {
      image.parentElement.addEventListener('click', activateFeatureFromImage)
      tourObserver.observe(image)
    })

    function activateFeature (target) {
      var el = target
      if (!el.getAttribute('data-image-id')) console.log('none')
      var id = '#content-' + el.getAttribute('data-image-id')

      var toolTip = document.querySelector(id)
      if (toolTip) {
        removeClass(scrollBoxes)
        removeClass(tourImages)
        el.classList.add('active')
        toolTip.classList.add('active')
      }
    }

    window.addEventListener('scroll', () => {
      var section = document.querySelector('.features__section')
      if (!section) return
      var offset = (section.scrollTop + section.scrollHeight - 400)
      var scrollTop = window.scrollY - window.innerHeight
      if (scrollTop > offset) {
        removeClass(scrollBoxes)
        removeClass(tourImages)
      }
    })
  })
})(jQuery, this)
