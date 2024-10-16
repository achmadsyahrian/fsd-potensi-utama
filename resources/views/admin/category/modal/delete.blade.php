<x-confirm-modal modalId="modal-delete" method="delete" title="Apa kamu yakin?" type="danger" confirmMessage="Ya, Hapus"
    message="" :actionUrl="route('admin.categories.destroy', '__ID__')" />

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var resetButtons = document.querySelectorAll(
            'a[data-bs-toggle="modal"][data-bs-target="#modal-delete"]');

        resetButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                var modalElement = document.getElementById('modal-delete');
                var modal = bootstrap.Modal.getOrCreateInstance(modalElement);

                var id = this.getAttribute('data-id');
                var actionUrl = this.getAttribute('data-action');
                var message = this.getAttribute('data-message');

                var form = modalElement.querySelector('form');
                form.action = actionUrl;

                var messageElement = modalElement.querySelector('.text-muted');
                messageElement.textContent = message;

                modal.show();
            });
        });
    });
</script>
