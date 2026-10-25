# ĐỒ ÁN MÔN TRIỂN KHAI VÀ QUẢN TRỊ HỆ THỐNG PHẦN MỀM
**Đề bài:** Đề 5 - Hệ thống Quản lý Kho hàng (Inventory)
**Sinh viên thực hiện:** Đoàn Tuấn Tú
**Mã số sinh viên:** DTC245280112

---

## 📌 Giới thiệu dự án
Hệ thống Quản lý Kho hàng & Vận chuyển (SPX Express) hỗ trợ quản lý nhập/xuất hàng, theo dõi tồn kho và báo cáo hàng ngày. Hệ thống được đóng gói hoàn toàn bằng Docker Compose, tích hợp đầy đủ các dịch vụ giám sát (Monitoring), quản lý nhật ký tập trung (Logging) và các giải pháp bảo mật hệ thống (Hardening).

---

## 🛠 Cấu trúc hệ thống & Danh sách các cổng (Ports)

| Dịch vụ (Service) | Công nghệ / Stack | Cổng (Port) | Mô tả |
| :--- | :--- | :--- | :--- |
| **Web App** | PHP / Nginx | `http://localhost` (Port 80) | Giao diện quản lý kho hàng |
| **Database** | MySQL 8.0 | `3306` | Cơ sở dữ liệu chính |
| **Database Manager** | phpMyAdmin | `http://localhost:8080` | Quản trị CSDL giao diện web |
| **Prometheus** | Prometheus | `http://localhost:9090` | Thu thập metrics hệ thống |
| **Grafana** | Grafana | `http://localhost:3000` | Trực quan hóa metrics & logs |
| **Loki** | Grafana Loki | `3100` | Hệ thống quản lý log tập trung |
| **Promtail** | Promtail | - | Agent thu thập log gửi về Loki |
| **cAdvisor** | Google cAdvisor | `http://localhost:8081` | Thu thập metrics từ Docker container |

---

## 🚀 Hướng dẫn khởi chạy hệ thống

### 1. Yêu cầu tiên quyết
* Đã cài đặt **Docker** và **Docker Compose**.
* Đã cài đặt **Git**.

### 2. Các bước triển khai
1. Clone repository về máy local:
   ```bash
   git clone [https://github.com/dtc245280112-svg/d-n-tri-n-khai-ng-d-ng.git](https://github.com/dtc245280112-svg/d-n-tri-n-khai-ng-d-ng.git)
   cd d-n-tri-n-khai-ng-d-ng