document.addEventListener("DOMContentLoaded", () => {
    loadService();
});

function loadService() {
    if (!SERVICE_ID) {
        renderError("Keine Service-ID übergeben.");
        return;
    }

    fetch(`/api/service.php?id=${SERVICE_ID}`, {
        headers: { "Accept": "application/json" }
    })
        .then(r => {
            if (!r.ok) throw new Error("Fehler " + r.status);
            return r.json();
        })
        .then(data => renderService(data))
        .catch(() => renderError("Service konnte nicht geladen werden."));
}

function renderService(service) {
    const container = document.getElementById("service-container");

    container.innerHTML = `
        <h2>${service.name}</h2>
        <p><strong>Abteilung:</strong> ${service.relatedDepartment}</p>
        <p><strong>Seit:</strong> ${service.year}</p>

        <h3>Anträge</h3>
        <ul class="application-list">
            ${service.applications.map(app => `
                <li>
                    <strong>${app.name}</strong><br>
                    Antragsteller: ${app.applicant}<br>
                    Nummer: ${app.applicationNumber}<br>
                    Status: ${app.status}
                </li>
            `).join('')}
        </ul>
    `;
}

function renderError(msg) {
    document.getElementById("service-container").innerHTML =
        `<p class="error">${msg}</p>`;
}
