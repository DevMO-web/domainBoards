


document.addEventListener("click",(e) => {
    let el = e.target;
    if(el.classList.contains("btn-shop")){
        let activeContent = document.querySelector(".test.active");
        if(activeContent)activeContent.classList.remove("active");
        
        let activeTab = document.querySelector(".btn-shop.active");
        if(activeTab)activeTab.classList.remove("active");
        
        el.classList.add("active");
        let tabTarget = document.querySelector(el.dataset.target);
        tabTarget.classList.add("active");
    }
  });
  
  const openTarget = location.hash ? location.hash : "#testing-a";
  const tabContent = document.querySelector(openTarget);
  tabContent.classList.add("active");
  
  const tab = document.querySelector("[data-target='" + openTarget + "']");
  tab.classList.add("active");





  


  