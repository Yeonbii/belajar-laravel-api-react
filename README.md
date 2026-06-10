# Belajar Laravel API + React

Project belajar untuk memahami:

- Laravel API
- Laravel Sanctum
- React
- Git & GitHub Workflow
- Feature Testing

Status:
- [ ] Authentication
- [ ] Post CRUD
- [ ] Category CRUD
- [ ] Image Upload

## Note

### Alur Pengerjaan (GitHub Flow)

1. **Buat Issue** di GitHub — deskripsikan apa yang akan dikerjakan
2. **Buat branch** dari `main`
```sh
git checkout main
git pull
git checkout -b <nama-branch>
```
3. **Kerjakan task** di branch tersebut
4. **Commit** setiap perubahan yang logis selesai
```sh
git add .
git commit -m "type: pesan singkat"
```
5. **Push** branch ke GitHub
```sh
git push origin <nama-branch>
```
6. **Buat Pull Request** — isi deskripsi dengan `closes #<nomor-issue>`
7. **Review** perubahan di tab Files Changed
8. **Merge** ke `main` jika sudah oke
9. **Hapus branch** di GitHub setelah merge
10. **Sync local**
```sh
git checkout main
git pull
```

Conventional Commits — formatnya `type: pesan`

- `chore` → setup, konfigurasi, hal non-fitur
- `feat` → fitur baru
- `fix` → perbaikan bug
- `test` → menambah/mengubah test
- `refactor` → perubahan kode tanpa mengubah fungsi
- `docs` → perubahan dokumentasi (README, komentar, dsb)
- `style` → formatting, spasi, titik koma — bukan CSS


## Panduan Feature Testing

Setiap fitur idealnya memiliki dua jenis test:

### Positive Test
Memastikan fitur berjalan dengan benar saat input valid.
- Endpoint mengembalikan status yang benar (200, 201, dll)
- Response memiliki struktur JSON yang diharapkan
- Data tersimpan/berubah di database

### Negative Test
Memastikan sistem menolak dengan benar saat input tidak valid.
- Field kosong → 422 (Unprocessable Entity)
- Data duplikat (email sudah terdaftar) → 422
- Data tidak ditemukan → 404
- Belum login tapi akses endpoint protected → 401
- Login tapi tidak punya akses → 403

### HTTP Status Code yang umum dipakai
| Kode | Arti | Kapan dipakai |
|---|---|---|
| 200 | OK | Request berhasil |
| 201 | Created | Data berhasil dibuat |
| 401 | Unauthorized | Belum login |
| 403 | Forbidden | Sudah login tapi tidak punya akses |
| 404 | Not Found | Data tidak ditemukan |
| 422 | Unprocessable Entity | Validasi gagal |
| 500 | Internal Server Error | Ada error di server |