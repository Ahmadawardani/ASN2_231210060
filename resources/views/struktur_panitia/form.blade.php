<div class="form-group">
    <label>Nama Kegiatan</label>
    <input type="text" name="nama_kegiatan" class="form-control" value="{{ old('nama_kegiatan', $item->nama_kegiatan ?? '') }}">
</div>
<div class="form-group">
    <label>Ketua Panitia</label>
    <input type="text" name="ketua_panitia" class="form-control" value="{{ old('ketua_panitia', $item->ketua_panitia ?? '') }}">
</div>
@foreach(['sekretaris_1','sekretaris_2','bendahara_1','bendahara_2'] as $field)
    <div class="form-group">
        <label>{{ ucfirst(str_replace('_', ' ', $field)) }}</label>
        <input type="text" name="{{ $field }}" class="form-control" value="{{ old($field, $item->$field ?? '') }}">
    </div>
@endforeach
@foreach(['sie_acara','sie_humas','sie_medinfo','sie_perlengkapan','sie_konsumsi'] as $field)
    <div class="form-group">
        <label>{{ ucfirst(str_replace('_', ' ', $field)) }} (pisahkan dengan koma)</label>
        <input type="text" name="{{ $field }}" class="form-control" value="{{ old($field, isset($item) ? implode(',', $item->$field ?? []) : '') }}">
    </div>
@endforeach
