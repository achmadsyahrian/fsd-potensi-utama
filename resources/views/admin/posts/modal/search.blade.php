<x-modal-form id="modal-search" title="Filter Pencarian" submitText="Cari" actionUrl="{{ route('admin.posts.index') }}"
    size="modal-sm" position="top" method="get" methodForm="get">
    <div class="row">
        <div class="col-lg-12">
            <div class="mb-3">
                <label class="form-label">Type</label>
                <select class="form-select" name="search_type" value="{{ request('search_type') }}">
                    <option value="" {{ request('search_type') == '' ? 'selected' : '' }}>Pilih Type</option>
                    <option value="news" {{ request('search_type') == 'news' ? 'selected' : '' }}>Berita</option>
                    <option value="announcement" {{ request('search_type') == 'announcement' ? 'selected' : '' }}>
                        Pengumuman</option>
                    {{-- <option value="community_service"
                        {{ request('search_type') == 'community_service' ? 'selected' : '' }}>Pengabdian Masyarakat
                    </option> --}}
                </select>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="mb-3">
                <label class="form-label">Category</label>
                <select class="form-select" name="search_category" value="{{ request('search_category') }}">
                    <option value="" {{ request('search_category') == '' ? 'selected' : '' }}>Pilih Category
                    </option>
                    @foreach ($categories as $item)
                        <option value="{{ $item->id }}"
                            {{ request('search_category') == $item->id ? 'selected' : '' }}>{{ $item->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="mb-3">
                <label class="form-label">Author</label>
                <select class="form-select" name="search_author" value="{{ request('search_author') }}">
                    <option value="" {{ request('search_author') == '' ? 'selected' : '' }}>Pilih Author</option>
                    @foreach ($authors as $item)
                        <option value="{{ $item->id }}"
                            {{ request('search_author') == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</x-modal-form>
