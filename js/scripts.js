const trigger = document.querySelector('.top-dop-menu-a');
 const menu = document.querySelector('.top-dop-menu');
 let hideTimeout;

  function showMenu() {
    clearTimeout(hideTimeout);
    menu.classList.add('show');
  }

  function hideMenu() {
    hideTimeout = setTimeout(() => {
      menu.classList.remove('show');
    }, 150);
  }

 if (trigger && menu) {
  trigger.addEventListener('mouseenter', showMenu);
  trigger.addEventListener('mouseleave', hideMenu);
  menu.addEventListener('mouseenter', showMenu);
  menu.addEventListener('mouseleave', hideMenu);
 }

document.addEventListener('DOMContentLoaded', function() {
    // Hide all mega panels by default
    var allPanels = document.querySelectorAll('[id^="mega-p"]');
    allPanels.forEach(function(panel) {
        panel.style.display = 'none';
    });

    // Open catalog on hover
    const catalogBtn = document.querySelector('#catalog-mega-toggle');
    const catalogDropdown = document.querySelector('#catalog-mega');

    if (catalogBtn && catalogDropdown) {
        catalogBtn.addEventListener('mouseenter', function() {
            catalogDropdown.style.opacity = '1';
            catalogDropdown.style.visibility = 'visible';
        });

        catalogBtn.addEventListener('mouseleave', function() {
            setTimeout(function() {
                if (!catalogDropdown.matches(':hover')) {
                    catalogDropdown.style.opacity = '0';
                    catalogDropdown.style.visibility = 'hidden';
                    closeAllSubmenus();
                }
            }, 150);
        });

        catalogDropdown.addEventListener('mouseenter', function() {
            catalogDropdown.style.opacity = '1';
            catalogDropdown.style.visibility = 'visible';
        });

        catalogDropdown.addEventListener('mouseleave', function() {
            setTimeout(function() {
                if (!catalogBtn.matches(':hover')) {
                    catalogDropdown.style.opacity = '0';
                    catalogDropdown.style.visibility = 'hidden';
                    closeAllSubmenus();
                }
            }, 150);
        });
    }

    // Open submenu on hover for first level items
    const menuItemsWithSubmenu = document.querySelectorAll('.menu-item-has-children');

    menuItemsWithSubmenu.forEach(function(menuItem) {
        const submenu = menuItem.querySelector('.submenu');

        if (submenu) {
            menuItem.addEventListener('mouseenter', function() {
                submenu.style.opacity = '1';
                submenu.style.visibility = 'visible';
            });

            menuItem.addEventListener('mouseleave', function() {
                setTimeout(function() {
                    if (!submenu.matches(':hover')) {
                        submenu.style.opacity = '0';
                        submenu.style.visibility = 'hidden';
                    }
                }, 150);
            });

            submenu.addEventListener('mouseenter', function() {
                submenu.style.opacity = '1';
                submenu.style.visibility = 'visible';
            });

            submenu.addEventListener('mouseleave', function() {
                setTimeout(function() {
                    if (!menuItem.matches(':hover')) {
                        submenu.style.opacity = '0';
                        submenu.style.visibility = 'hidden';
                    }
                }, 150);
            });
        }
    });

    const catalogItemsWithSubmenu = document.querySelectorAll('.catalog-mega__cat.has-submenu');

    catalogItemsWithSubmenu.forEach(function(item) {
        item.addEventListener('mouseenter', function() {
            var panelId = item.getAttribute('data-mega-panel');
            
            var allPanels = document.querySelectorAll('[id^="mega-p"]');
            allPanels.forEach(function(panel) {
                panel.style.display = 'none';
            });

            if (panelId) {
                var targetPanel = document.getElementById(panelId);
                if (targetPanel) {
                    targetPanel.style.display = 'block';
                }
            }
        });
    });

    function closeAllSubmenus() {
        var allSubmenus = document.querySelectorAll('.submenu');
        allSubmenus.forEach(function(submenu) {
            submenu.style.opacity = '0';
            submenu.style.visibility = 'hidden';
        });

        var allPanels = document.querySelectorAll('[id^="mega-p"]');
        allPanels.forEach(function(panel) {
            panel.style.display = 'none';
        });
    }
});

document.addEventListener('DOMContentLoaded', function() {
  const filterHeads = document.querySelectorAll('.search_filter__head');
  if (!filterHeads.length) return;

  filterHeads.forEach(function(head) {
    head.style.cursor = 'pointer';
    head.addEventListener('click', function() {
      const filter = head.closest('.search_filter');
      if (!filter) return;

      const groups = filter.querySelectorAll('.search_filter__group');
      const actions = filter.querySelector('.search_filter__actions');
      const hidden = filter.classList.toggle('is-collapsed');

      groups.forEach(function(group) {
        group.hidden = hidden;
      });
      if (actions) actions.hidden = hidden;
    });
  });

  const isMobile = window.matchMedia('(max-width: 767px)').matches;
  if (isMobile) {
    const collapsibleInits = document.querySelectorAll('.search_filter--collapsed-init');
    collapsibleInits.forEach(function(filter) {
      filter.classList.add('is-collapsed');
      const groups = filter.querySelectorAll('.search_filter__group');
      const actions = filter.querySelector('.search_filter__actions');
      groups.forEach(function(group) {
        group.hidden = true;
      });
      if (actions) actions.hidden = true;
    });
  }
});

$('#mobile-nav-toggle').on('click', function(){
	$('#mobile-nav-drawer').toggle();
});

$('#mobile-catalog-toggle').on('click', function(){
	$(this).toggleClass('active');
	$('.catBody').toggle();
});

document.addEventListener('DOMContentLoaded', function() {
  const slider = document.querySelector('.mini_slider');
  if (!slider) return;
  const body = slider.querySelector('.mini_slider_body');
  const slides = body.children;
  const prevBtn = slider.querySelector('.L');
  const nextBtn = slider.querySelector('.R');
  
  let currentIndex = 0;          
  let slideWidth = 0;            
  let totalSlides = slides.length;
  let visibleSlides = 2;

  function isMobileMode() {
    return window.matchMedia('(max-width: 767px)').matches;
  }

  function getVisibleSlides() {
    return isMobileMode() ? 1 : 2;
  }
  
  function getContainerWidth() {
    // �� ��������� ������ .mini_slider ����� �������������� ��������� (float/���������).
    // ���� ������ ���������� ����������, � �� ������ ������.
    const parent = slider.parentElement;
    if (parent) return parent.getBoundingClientRect().width;
    return slider.getBoundingClientRect().width;
  }
  
  function initSlider() {
    if (totalSlides === 0) return;

    visibleSlides = getVisibleSlides();

    slideWidth = slides[0].getBoundingClientRect().width;

    // ������������� ������ ������ ��� ��������� ������ �� ��������� ������.
    if (isMobileMode()) {
      const containerWidth = getContainerWidth();
      if (containerWidth && containerWidth > 0) {
        slideWidth = containerWidth / visibleSlides;
      }
    }

    slider.style.width = (slideWidth * visibleSlides) + 'px';
    body.style.width = (slideWidth * totalSlides) + 'px';

    for (let i = 0; i < totalSlides; i++) {
      slides[i].style.width = slideWidth + 'px';
    }
    
    if (totalSlides <= visibleSlides) {
      prevBtn.style.display = 'none';
      nextBtn.style.display = 'none';
    } else {
      prevBtn.style.display = '';
      nextBtn.style.display = '';
    }
    
    currentIndex = Math.min(currentIndex, Math.max(0, totalSlides - visibleSlides));
    updateSliderPosition();
  }
  
  function updateSliderPosition() {
    const offset = -currentIndex * slideWidth;
    body.style.transform = `translateX(${offset}px)`;
    
    if (currentIndex === 0) {
      prevBtn.classList.add('disabled');
    } else {
      prevBtn.classList.remove('disabled');
    }

    const maxIndex = Math.max(0, totalSlides - visibleSlides);
    if (currentIndex >= maxIndex) {
      nextBtn.classList.add('disabled');
    } else {
      nextBtn.classList.remove('disabled');
    }
  }
  
  function nextSlide() {
    const maxIndex = Math.max(0, totalSlides - visibleSlides);
    if (currentIndex < maxIndex) {
      currentIndex++;
      updateSliderPosition();
    }
  }
  
  function prevSlide() {
    if (currentIndex > 0) {
      currentIndex--;
      updateSliderPosition();
    }
  }
  
  nextBtn.addEventListener('click', nextSlide);
  prevBtn.addEventListener('click', prevSlide);
  
  window.addEventListener('resize', function() {

    const newVisible = getVisibleSlides();
    let newSlideWidth = slideWidth;

    if (isMobileMode()) {
      const newContainerWidth = getContainerWidth();
      newSlideWidth = newContainerWidth && newContainerWidth > 0 ? newContainerWidth / newVisible : slideWidth;
    } else {
      // �� �������� ������������� �� ����������� ������ ������, ����� �� ������ ����������������.
      newSlideWidth = slides[0].getBoundingClientRect().width;
    }

    if (newVisible !== visibleSlides || Math.abs(newSlideWidth - slideWidth) > 0.5) {
      visibleSlides = newVisible;
      slideWidth = newSlideWidth;
      slider.style.width = (slideWidth * visibleSlides) + 'px';
      body.style.width = (slideWidth * totalSlides) + 'px';

      for (let i = 0; i < totalSlides; i++) {
        slides[i].style.width = slideWidth + 'px';
      }

      currentIndex = Math.min(currentIndex, Math.max(0, totalSlides - visibleSlides));
      updateSliderPosition();
    }
  });
  
  initSlider();
});

    $('.faq').on('click', '.faq_title', function(){
		$(this).closest('div').find('.faq_text').toggle();
	});
	
	
// �����	
document.addEventListener('DOMContentLoaded', function() {
  const isMobile = window.matchMedia('(max-width: 767px)').matches;
  const videoElements = document.querySelectorAll('.video-reviews video');

  if (isMobile) {
    videoElements.forEach(video => {
      video.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        if (video.requestFullscreen) {
          video.requestFullscreen().then(() => video.play().catch(() => {})).catch(() => {});
        } else if (video.webkitRequestFullscreen) {
          video.webkitRequestFullscreen();
          video.play().catch(() => {});
        } else if (video.msRequestFullscreen) {
          video.msRequestFullscreen();
          video.play().catch(() => {});
        }
      });
    });
  } else {
    function handleVideoActivation(e) {
      e.preventDefault();
      e.stopPropagation();
      openVideoModal(this.src);
    }

    videoElements.forEach(video => {
      video.addEventListener('click', handleVideoActivation);
      video.addEventListener('touchstart', handleVideoActivation);
      video.addEventListener('contextmenu', e => e.preventDefault());
    });
  }

  function openVideoModal(src) {
    const overlay = document.createElement('div');
    overlay.className = 'video-modal-overlay';
    
    const container = document.createElement('div');
    container.className = 'video-modal-container';
    
    const video = document.createElement('video');
    video.src = src;
    video.controls = true;
    video.autoplay = true;
    video.muted = false;
    
    const closeBtn = document.createElement('div');
    closeBtn.className = 'video-modal-close';
    closeBtn.innerHTML = '<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M0.350199 0.350198C0.81713 -0.116733 1.57418 -0.116733 2.04111 0.350198L11 9.30909L19.9589 0.350198C20.4258 -0.116733 21.1829 -0.116733 21.6498 0.350198C22.1167 0.817129 22.1167 1.57417 21.6498 2.04111L12.6909 11L21.6498 19.9589C22.1167 20.4258 22.1167 21.1829 21.6498 21.6498C21.1829 22.1167 20.4258 22.1167 19.9589 21.6498L11 12.6909L2.04111 21.6498C1.57418 22.1167 0.81713 22.1167 0.350199 21.6498C-0.116733 21.1829 -0.116733 20.4258 0.350198 19.9589L9.30909 11L0.350198 2.04111C-0.116733 1.57417 -0.116733 0.817129 0.350199 0.350198Z" fill="white"/></svg>';
    
    container.appendChild(video);
    container.appendChild(closeBtn);
    overlay.appendChild(container);
    document.body.appendChild(overlay);
    
    setTimeout(() => overlay.classList.add('active'), 10);
    
    const playPromise = video.play();
    if (playPromise !== undefined) {
      playPromise.catch(() => video.controls = true);
    }
    
    function closeModal() {
      video.pause();
      video.currentTime = 0;
      overlay.classList.remove('active');
      setTimeout(() => overlay.remove(), 300);
      document.removeEventListener('keydown', handleKeydown);
    }
    
    function handleKeydown(e) {
      if (e.key === 'Escape') closeModal();
    }
    
    closeBtn.addEventListener('click', closeModal);
    overlay.addEventListener('click', e => { if (e.target === overlay) closeModal(); });
    document.addEventListener('keydown', handleKeydown);
  }
});

/* ������� ������� */
  (function() {
    const track = document.querySelector('.slider-track');
    const slides = Array.from(track.children);
    const prevBtn = document.querySelector('.slider-btn.prev');
    const nextBtn = document.querySelector('.slider-btn.next');
    let slidesToShow = 2;
    let currentIndex = 0;
    let slideWidth = 0;
    let gap = 20;

    function updateDimensions() {
      const isMobile = window.innerWidth <= 768;
      slidesToShow = isMobile ? 1 : 2;
      const container = document.querySelector('.slider');
      const containerWidth = container.clientWidth;
      const computedGap = window.getComputedStyle(track).gap;
      gap = computedGap === 'normal' ? 20 : parseFloat(computedGap);
      if (slidesToShow === 2) {
        slideWidth = (containerWidth - gap) / 2;
      } else {
        slideWidth = containerWidth;
      }
      slides.forEach(slide => {
        slide.style.width = `${slideWidth}px`;
      });
      const maxIndex = Math.max(0, slides.length - slidesToShow);
      if (currentIndex > maxIndex) currentIndex = maxIndex;
      updateSliderPosition();
      updateButtonsState();
    }

    function updateSliderPosition() {
      const shift = currentIndex * (slideWidth + gap);
      track.style.transform = `translateX(-${shift}px)`;
    }

    function updateButtonsState() {
      const maxIndex = Math.max(0, slides.length - slidesToShow);
      if (currentIndex <= 0) {
        prevBtn.classList.add('disabled');
      } else {
        prevBtn.classList.remove('disabled');
      }
      if (currentIndex >= maxIndex) {
        nextBtn.classList.add('disabled');
      } else {
        nextBtn.classList.remove('disabled');
      }
    }

    function nextSlide() {
      const maxIndex = Math.max(0, slides.length - slidesToShow);
      if (currentIndex < maxIndex) {
        currentIndex++;
        updateSliderPosition();
        updateButtonsState();
      }
    }

    function prevSlide() {
      if (currentIndex > 0) {
        currentIndex--;
        updateSliderPosition();
        updateButtonsState();
      }
    }

    prevBtn.addEventListener('click', prevSlide);
    nextBtn.addEventListener('click', nextSlide);

    let resizeTimer;
    window.addEventListener('resize', function() {
      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(updateDimensions, 100);
    });

    updateDimensions();
  })();