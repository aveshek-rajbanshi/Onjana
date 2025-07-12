let accountIcon = document.getElementById('account');
let accountContainer = document.getElementById('account-Container');

accountIcon.addEventListener("click", () =>{
  accountContainer.style.display = "block";
});

accountIcon.addEventListener("dblclick", () => {
    accountContainer.style.display = "none";
});