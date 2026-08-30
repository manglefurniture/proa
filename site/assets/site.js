const scriptElement=[...document.scripts].find(script=>/assets\/site\.js(?:\?|$)/.test(script.src));
const assetVersion=scriptElement?new URL(scriptElement.src,window.location.href).searchParams.get('v'):null;
const assetSuffix=assetVersion?`?v=${encodeURIComponent(assetVersion)}`:'';

['pages.css','premium.css','header.css'].forEach(file=>{
  const baseHref=`assets/${file}`;
  const alreadyLoaded=[...document.querySelectorAll('link[rel="stylesheet"]')].some(link=>{
    const href=link.getAttribute('href')||'';
    return href===baseHref||href.startsWith(`${baseHref}?`);
  });
  if(!alreadyLoaded){
    const link=document.createElement('link');
    link.rel='stylesheet';
    link.href=`${baseHref}${assetSuffix}`;
    document.head.appendChild(link);
  }
});

const topbar=document.querySelector('.topbar');
const menuButton=document.querySelector('.menu-btn');
const menu=document.querySelector('.menu');

if(menuButton&&menu){
  const closeMenu=()=>{
    menu.classList.remove('open');
    menuButton.setAttribute('aria-expanded','false');
    menuButton.textContent='Menú';
    document.body.classList.remove('menu-open');
    topbar?.classList.remove('menu-active');
  };

  const openMenu=()=>{
    menu.classList.add('open');
    menuButton.setAttribute('aria-expanded','true');
    menuButton.textContent='Cerrar';
    document.body.classList.add('menu-open');
    topbar?.classList.add('menu-active');
  };

  menuButton.addEventListener('click',()=>{
    menu.classList.contains('open')?closeMenu():openMenu();
  });

  menu.querySelectorAll('a').forEach(link=>link.addEventListener('click',closeMenu));
  document.addEventListener('keydown',event=>{if(event.key==='Escape')closeMenu();});
  window.addEventListener('resize',()=>{if(window.innerWidth>700)closeMenu();});
}

if(topbar){
  const syncHeader=()=>{
    if(window.innerWidth<=700){
      topbar.classList.toggle('scrolled',window.scrollY>28);
    }else{
      topbar.classList.remove('scrolled','menu-active');
    }
  };
  syncHeader();
  window.addEventListener('scroll',syncHeader,{passive:true});
  window.addEventListener('resize',syncHeader);
}

const revealItems=document.querySelectorAll('.reveal');
if('IntersectionObserver'in window){
  const observer=new IntersectionObserver(entries=>{entries.forEach(entry=>{if(entry.isIntersecting){entry.target.classList.add('visible');observer.unobserve(entry.target);}});},{threshold:.12});
  revealItems.forEach(item=>observer.observe(item));
}else{
  revealItems.forEach(item=>item.classList.add('visible'));
}
