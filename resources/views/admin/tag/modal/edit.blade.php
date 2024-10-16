<x-modal-form id="modal-edit" title="Edit Tag" submitText="Simpan" actionUrl="" method="patch">
    <div class="row">
        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label required">Nama</label>
                <x-form-input id="name-input" name="name" value="" placeholder="Masukkan nama" />
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mb-3">
                <label class="form-label required">Slug</label>
                <x-form-input id="slug-input" name="slug" value="" readonly />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div>
                <label class="form-label">Deskripsi</label>
                <textarea class="form-control" name="description" rows="3"></textarea>
            </div>
        </div>
    </div>
</x-modal-form>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const editButtons = document.querySelectorAll('.edit-button');
        const modal = document.getElementById('modal-edit');
        const nameInput = modal.querySelector('#name-input');
        const slugInput = modal.querySelector('#slug-input');

        function generateSlug(text) {
            return text
                .toLowerCase() // Convert all characters to lowercase
                .replace(/[^\w\s-]/g, '') // Remove non-alphanumeric characters except spaces and dashes
                .trim() // Trim leading and trailing spaces
                .replace(/\s+/g, '-') // Replace spaces with dashes
                .replace(/--+/g, '-') // Replace multiple dashes with a single dash
                .replace(/^-+|-+$/g, ''); // Remove dashes from the start and end
        }

        editButtons.forEach(button => {
            button.addEventListener('click', function() {
                const itemId = this.getAttribute('data-id');
                const actionUrl = this.getAttribute('data-action');
                const itemName = this.getAttribute('data-name');
                const itemSlug = this.getAttribute('data-slug');
                const itemDescription = this.getAttribute('data-description');

                // Set action URL in the form
                modal.querySelector('form').setAttribute('action', actionUrl);

                // Populate the form inputs
                nameInput.value = itemName;
                slugInput.value = itemSlug;
                modal.querySelector('textarea[name="description"]').value = itemDescription;
            });
        });

        // Update slug whenever the name input changes
        nameInput.addEventListener('input', function() {
            slugInput.value = generateSlug(nameInput.value);
        });
    });
</script>
