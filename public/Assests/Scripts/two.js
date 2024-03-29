const tabContainer = document.querySelector('[data-name="tab-container"]');
tabContainer.addEventListener('click', tabEvent);


function tabEvent(event) {
  // Get the clicked element
  const clickedElement = event.target;

  // Check if the clicked element has the role "tab"
  if (clickedElement.getAttribute("role") !== "tab") {
    // If not a tab, do nothing and return
    return;
  }

  // First, grab all the children of the tabContainer with a role of tab
  const tabContainerChildren = document.querySelectorAll('[role="tab"]');
  const tabContentChildren = document.querySelectorAll('[role="tabpanel"]');

  // Then, reset all tabs and tab contents
  tabContainerChildren.forEach(btn => {
    btn.setAttribute("aria-selected", "false");
  });

  // Get the clicked tab button
  const clickedTabButton = clickedElement;

  // Update the clicked tab button
  let activeTab = clickedTabButton.getAttribute("aria-selected");
  if (activeTab === "false") {
    clickedTabButton.setAttribute("aria-selected", "true");
    tabContentChildren.forEach(content => {
      content.setAttribute("aria-hidden", "true");
    });
    // Update the corresponding tab content
    for (let i = 0; i < tabContentChildren.length; i++) {
      const contentID = tabContentChildren[i].getAttribute("data-content-id");
      const tabID = clickedTabButton.getAttribute("data-tab-id");

      if (tabID === contentID) {
        console.log("match");
        tabContentChildren[i].setAttribute("aria-hidden", "false");
        break;
      }
    }

    
    
  }
}




let activeContent = document.querySelector(".test.active");
const tabContainerChildren = document.querySelectorAll('[role="tab"]');
// Set aria-hidden to true for all elements with class "test"
let allContents = document.querySelectorAll(".test");
allContents.forEach((content) => {
  if (content !== activeContent) {
    tabContainerChildren.forEach(btn => {
  
      btn.setAttribute("aria-selected", "false");
    });
    content.classList.remove("active");
    
    content.setAttribute("aria-hidden", "true");

  }
});


const openTarget = location.hash ? location.hash : "#testing-a";
const tabContent = document.querySelector(openTarget);
tabContent.classList.add("active");
tabContent.setAttribute("aria-hidden", "false");

const tab = document.querySelector("[data-target='" + openTarget + "']");
tab.classList.add("active");
tab.setAttribute("aria-selected", "true");


