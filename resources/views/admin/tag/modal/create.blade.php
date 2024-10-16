<x-modal-form id="modal-create" title="Tambah Tag" submitText="Tambah" actionUrl="{{ route('admin.tags.store') }}">
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