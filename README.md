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

Alur Pengerjaan (GitHub Flow)

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