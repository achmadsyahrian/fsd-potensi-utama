<div class="modal modal-blur fade" id="modal-detail" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <strong>Nama</strong>
                    </div>
                    <div class="col-md-8">
                        <span id="detail-name"></span>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-4">
                        <strong>Slug</strong>
                    </div>
                    <div class="col-md-8">
                        <span id="detail-slug"></span>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-4">
                        <strong>Deskripsi</strong>
                    </div>
                    <div class="col-md-8">
                        <span id="detail-description"></span>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-4">
                        <strong>Terakhir Diperbarui</strong>
                    </div>
                    <div class="col-md-8">
                        <span id="detail-updated-at"></span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const detailButtons = document.querySelectorAll('.detail-button');

        detailButtons.forEach(button => {
            button.addEventListener('click', function() {
                const categoryId = this.getAttribute('data-id');

                // Memanggil API untuk mengambil data kategori
                fetch(`/admin/categories/${categoryId}`)
                    .then(response => response.json())
                    .then(data => {
                        // Memastikan data diterima dan mengisi modal
                        if (data.error) {
                            alert(data.error);
                        } else {
                            document.getElementById('detail-name').textContent = data.name;
                            document.getElementById('detail-slug').textContent = data.slug;
                            document.getElementById('detail-description').textContent = data
                                .description || '--';

                            const updatedAt = new Date(data.updated_at);

                            // Format tanggal
                            const formattedDate = updatedAt.toLocaleDateString('id-ID', {
                                year: 'numeric',
                                month: 'long',
                                day: 'numeric'
                            });

                            // Format waktu
                            const formattedTime = updatedAt.toLocaleTimeString('id-ID', {
                                hour: '2-digit',
                                minute: '2-digit',
                                second: '2-digit'
                            });

                            // Gabungkan tanggal dan waktu
                            document.getElementById('detail-updated-at').textContent =
                                `${formattedDate} ${formattedTime}`;
                        }
                    })
                    .catch(error => {
                        console.error('Error fetching category:', error);
                    });
            });
        });
    });
</script>
