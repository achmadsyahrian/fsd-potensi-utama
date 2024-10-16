<div class="modal modal-blur fade" id="modal-edit" tabindex="-1" role="dialog" aria-hidden="true">
    <form action="" method="post" class="d-inline">
        @csrf
        @method('patch')
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label required">Nama</label>
                                <x-form-input id="edit-name-input" name="name" value=""
                                    placeholder="Masukkan nama" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label required">Slug</label>
                                <x-form-input id="edit-slug-input" name="slug" value="" readonly />
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
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                        Batal
                    </a>
                    <button class="btn btn-primary ms-auto" data-bs-dismiss="modal">
                        Simpan
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const editButtons = document.querySelectorAll('.edit-button');
        const modal = document.getElementById('modal-edit');
        const form = modal.querySelector('form');
        const nameInput = document.getElementById('edit-name-input');
        const slugInput = document.getElementById('edit-slug-input');
        const descriptionTextarea = modal.querySelector('textarea[name="description"]');

        editButtons.forEach(button => {
            button.addEventListener('click', function() {
                const categoryId = this.getAttribute('data-id');
                const actionUrl = this.getAttribute('data-action');

                // Set action URL on the form for update
                form.setAttribute('action', actionUrl);

                // Perform AJAX request to fetch category data
                fetch(`/admin/categories/${categoryId}`)
                    .then(response => response.json())
                    .then(data => {
                        // Populate the modal with the data
                        nameInput.value = data.name;
                        slugInput.value = data.slug;
                        descriptionTextarea.value = data.description;
                    })
                    .catch(error => {
                        console.error('Error fetching category data:', error);
                    });
            });
        });

        // Function to generate slug (optional if you want to keep it)
        function generateSlug(text) {
            return text
                .toLowerCase()
                .replace(/[^\w\s-]/g, '')
                .trim()
                .replace(/\s+/g, '-');
        }

        // Automatically generate slug based on name input
        nameInput.addEventListener('input', function() {
            const nameValue = nameInput.value;
            const slugValue = generateSlug(nameValue);
            slugInput.value = slugValue;
        });
    });
</script>
