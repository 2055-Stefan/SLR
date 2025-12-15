document.addEventListener("DOMContentLoaded", () => {
    fetchServices();
    initThemeToggle();
});

function fetchServices() {
    fetch("/api/services.php", {
        headers: { "Accept": "application/json" }
    })
    .then(response => {
        if (!response.ok) {
            throw new Error("Fehler beim Laden: " + response.status);
        }
        return response.json();
    })
    .then(data => renderServices(data))
    .catch(err => console.error(err));
}

function renderServices(services) {
    const list = document.getElementById("service-list");
    if (!list) return;

    list.innerHTML = "";

    services.forEach(svc => {
        const li = document.createElement("li");
        li.classList.add("service-list-item");
        li.innerHTML = `
            <a href="/service.php?id=${svc.id}">
                <strong>${svc.name}</strong><br>
                <small>Abteilung: ${svc.relatedDepartment}</small><br>
                <small>Seit: ${svc.year}</small>
            </a>
        `;
        list.appendChild(li);
    });
}

/* ======== Theme Toggle ======== */
function initThemeToggle() {
    const toggle = document.querySelector(".theme-toggle");
    if (!toggle) return;

    toggle.addEventListener("click", (e) => {
        e.preventDefault();

        const isDark = document.body.classList.contains("dark");
        const newTheme = isDark ? "light" : "dark";

        window.location.href = `/index.php?theme=${newTheme}`;
    });
}


