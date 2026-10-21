# Dokumentasi REST API - Perpustakaan Digital Kampus

Base URL: `http://127.0.0.1:8000/api`  
Header: `Accept: application/json`

---

## Ringkasan Endpoint

| Method | Endpoint                 | Status Code       | Body (JSON)           | Deskripsi                                                     |
| ------ | ------------------------ | ----------------- | --------------------- | ------------------------------------------------------------- |
| GET    | `/books`                 | 200 OK            | -                     | Mengambil daftar buku terpaginasi beserta kategori            |
| GET    | `/books?judul={keyword}` | 200 OK            | -                     | Filter pencarian buku berdasarkan judul                       |
| GET    | `/books/{id}`            | 200 OK / 404      | -                     | Mengambil detail satu buku                                    |
| POST   | `/books`                 | 201 Created / 422 | Data buku lengkap     | Menambah buku baru                                            |
| PUT    | `/books/{id}`            | 200 OK / 422      | Data buku update      | Memperbarui data buku                                         |
| DELETE | `/books/{id}`            | 200 OK / 404      | -                     | Menghapus buku                                                |
| GET    | `/members`               | 200 OK            | -                     | Mengambil daftar anggota terpaginasi                          |
| GET    | `/members/{id}`          | 200 OK / 404      | -                     | Mengambil detail anggota                                      |
| GET    | `/loans`                 | 200 OK            | -                     | Mengambil daftar riwayat peminjaman                           |
| POST   | `/loans`                 | 201 Created / 422 | Data transaksi pinjam | Membuat transaksi peminjaman baru                             |
| PUT    | `/loans/{id}/kembalikan` | 200 OK / 404      | -                     | Mengubah status peminjaman jadi dikembalikan                  |
| GET    | `/stats`                 | 200 OK            | -                     | Menampilkan statistik total buku, anggota, dan pinjaman aktif |

---

## Contoh Payload & Respon Pengujian

### 1. GET `/api/books`

- **Status:** `200 OK`
- **Response:**

```json
{
    "data": [
        {
            "id": 1,
            "judul": "Belajar Laravel",
            "penulis": "ardhi",
            "penerbit": "ardhi",
            "tahun_terbit": "2026",
            "isbn": null,
            "stok": 1,
            "sampul": null,
            "category": {
                "id": 2,
                "nama_kategori": "Framework"
            },
            "created_at": "2026-10-05T21:04:31.000000Z",
            "updated_at": "2026-10-05T21:04:31.000000Z"
        }
    ],
    "links": {
        "first": "[http://127.0.0.1:8000/api/books?page=1](http://127.0.0.1:8000/api/books?page=1)",
        "last": "[http://127.0.0.1:8000/api/books?page=1](http://127.0.0.1:8000/api/books?page=1)",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "total": 3,
        "per_page": 10
    }
}
```
