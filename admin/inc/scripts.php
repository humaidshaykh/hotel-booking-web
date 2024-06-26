<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

<script>
    function alert(type, msg) {
        let bs_class = (type == 'success') ? "alert-success" : "alert-danger";

        let element = document.createElement('div');

        element.innerHTML = `
        <div class="alert ${bs_class} alert-dismissible fade show custom-alert" id="alert-close" role="alert">
            <strong class="me-3">${msg}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    `;

    document.body.appendChild(element);

    setTimeout(() => {
        element.style.display = "none";
    }, 3000);

    }
</script>