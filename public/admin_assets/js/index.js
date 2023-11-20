(() => {
    const toggles = document.querySelector(".toggles");
    const nav = document.querySelector(".nav");
    const close_nav = document.querySelector(".close");

    toggles.onclick = () => {
        nav.classList.toggle("active");
    };

    close_nav.onclick = () => {
        nav.classList.toggle("active");
    };
})();

(() => {
    const profile_icon = document.getElementById("profile_icon");
    const subMenuProfile = document.getElementById("subMenuProfile");

    profile_icon.onclick = () => {
        subMenuProfile.classList.toggle("active");
    };
})();
