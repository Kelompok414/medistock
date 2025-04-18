@extends('admin')

@section('title', 'Dashboard')

@section('content')
    <div class="dashboard-container">
        <div class="dashboard-content">
            <div class="summary-cards">
                <div class="summary-card">
                    <div class="card-header">
                        <div class="card-icon">
                            <img src="{{ asset('assets/images/medicine-total.png') }}" alt="Total Obat">
                        </div>
                        <h3 class="card-title">Total Obat</h3>
                    </div>
                    <div class="card-content">
                        <div class="card-value">1,245</div>
                        <div class="card-subtitle">25 obat baru</div>
                    </div>
                </div>

                <div class="summary-card">
                    <div class="card-header">
                        <div class="card-icon">
                            <img src="{{ asset('assets/images/trending-down.png') }}" alt="Akan Kadaluarsa">
                        </div>
                        <h3 class="card-title">Akan Kadaluarsa</h3>
                    </div>
                    <div class="card-content">
                        <div class="card-value yellow">48</div>
                        <div class="card-subtitle">Dalam 3 bulan</div>
                    </div>
                </div>

                <div class="summary-card">
                    <div class="card-header">
                        <div class="card-icon">
                            <img src="{{ asset('assets/images/x-circle.png') }}" alt="Kadaluarsa">
                        </div>
                        <h3 class="card-title">Kadaluarsa</h3>
                    </div>
                    <div class="card-content">
                        <div class="card-value red">12</div>
                        <div class="card-subtitle">Harus dimusnahkan</div>
                    </div>
                </div>

                <div class="summary-card">
                    <div class="card-header">
                        <div class="card-icon">
                            <img src="{{ asset('assets/images/report.png') }}" alt="Stok Menipis">
                        </div>
                        <h3 class="card-title">Stok Menipis</h3>
                    </div>
                    <div class="card-content">
                        <div class="card-value">32</div>
                        <div class="card-subtitle">Perlu pemesanan</div>
                    </div>
                </div>
            </div>

            <div class="dashboard-panels">
                <div class="expiry-panel panel">
                    <h2>Pengingat Kadaluarsa Obat</h2>
                    
                    <div class="table-container">
                        <table class="expiry-table">
                            <thead>
                                <tr>
                                    <th>Nama Obat</th>
                                    <th>Batch</th>
                                    <th>Tanggal Kadaluarsa</th>
                                    <th>Sisa Hari</th>
                                    <th>Stok</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="medicine-name" data-label="Nama Obat">Paracetamol 500mg</td>
                                    <td data-label="Batch">B12345</td>
                                    <td data-label="Tanggal Kadaluarsa">05 Jun 2025</td>
                                    <td class="days-warning" data-label="Sisa Hari">89 Hari</td>
                                    <td data-label="Stok">145 Tablet</td>
                                    <td data-label="Status"><span class="status-badge warning">Akan Kadaluarsa</span></td>
                                </tr>
                                <tr>
                                    <td class="medicine-name" data-label="Nama Obat">Amoxicillin 500mg</td>
                                    <td data-label="Batch">B23456</td>
                                    <td data-label="Tanggal Kadaluarsa">20 Mei 2025</td>
                                    <td class="days-warning" data-label="Sisa Hari">73 Hari</td>
                                    <td data-label="Stok">76 Tablet</td>
                                    <td data-label="Status"><span class="status-badge warning">Akan Kadaluarsa</span></td>
                                </tr>
                                <tr>
                                    <td class="medicine-name" data-label="Nama Obat">Cetirizine 10mg</td>
                                    <td data-label="Batch">B34567</td>
                                    <td data-label="Tanggal Kadaluarsa">15 Feb 2025</td>
                                    <td class="days-expired" data-label="Sisa Hari">-22 Hari</td>
                                    <td data-label="Stok">30 Tablet</td>
                                    <td data-label="Status"><span class="status-badge danger">Kadaluarsa</span></td>
                                </tr>
                                <tr>
                                    <td class="medicine-name" data-label="Nama Obat">Simvastatin 20mg</td>
                                    <td data-label="Batch">B45678</td>
                                    <td data-label="Tanggal Kadaluarsa">12 Agu 2025</td>
                                    <td data-label="Sisa Hari">157 Hari</td>
                                    <td data-label="Stok">50 Tablet</td>
                                    <td data-label="Status"><span class="status-badge success">Tersedia</span></td>
                                </tr>
                                <tr>
                                    <td class="medicine-name" data-label="Nama Obat">Metformin 500mg</td>
                                    <td data-label="Batch">B56789</td>
                                    <td data-label="Tanggal Kadaluarsa">25 Jul 2025</td>
                                    <td data-label="Sisa Hari">139 Hari</td>
                                    <td data-label="Stok">120 Tablet</td>
                                    <td data-label="Status"><span class="status-badge success">Tersedia</span></td>
                                </tr>
                                <tr>
                                    <td class="medicine-name" data-label="Nama Obat">Ibuprofen 400mg</td>
                                    <td data-label="Batch">B67890</td>
                                    <td data-label="Tanggal Kadaluarsa">10 Apr 2025</td>
                                    <td class="days-warning" data-label="Sisa Hari">33 Hari</td>
                                    <td data-label="Stok">87 Tablet</td>
                                    <td data-label="Status"><span class="status-badge warning">Akan Kadaluarsa</span></td>
                                </tr>
                                <tr>
                                    <td class="medicine-name" data-label="Nama Obat">Vitamin C 500mg</td>
                                    <td data-label="Batch">B78901</td>
                                    <td data-label="Tanggal Kadaluarsa">02 Mar 2025</td>
                                    <td class="days-expired" data-label="Sisa Hari">-6 Hari</td>
                                    <td data-label="Stok">25 Tablet</td>
                                    <td data-label="Status"><span class="status-badge danger">Kadaluarsa</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="notification-panel panel">
                    <h2>Notifikasi Terbaru</h2>
                    
                    <div class="notifications-list">
                        <div class="notification-item">
                            <div class="notification-icon small danger">
                                <img src="{{ asset('assets/images/x-circle.png') }}" alt="Expired">
                            </div>
                            <div class="notification-content">
                                <h3>Vitamin C 500mg Telah Kadaluarsa</h3>
                                <p>25 tablet perlu dilakukan pemusnahan.</p>
                                <div class="notification-date">21 Maret 2025</div>
                            </div>
                        </div>
                        
                        <div class="notification-item">
                            <div class="notification-icon small danger">
                                <img src="{{ asset('assets/images/x-circle.png') }}" alt="Expired">
                            </div>
                            <div class="notification-content">
                                <h3>Cetirizine 10mg Telah Kadaluarsa</h3>
                                <p>30 tablet perlu dilakukan pemusnahan.</p>
                                <div class="notification-date">21 Maret 2025</div>
                            </div>
                        </div>
                        
                        <div class="notification-item">
                            <div class="notification-icon small info">
                                <img src="{{ asset('assets/images/report.png') }}" alt="Report">
                            </div>
                            <div class="notification-content">
                                <h3>Laporan Bulanan Sudah Tersedia</h3>
                                <p>Lihat ringkasan obat kadaluarsa bulan Februari.</p>
                                <div class="notification-date">1 Maret 2025</div>
                            </div>
                        </div>
                        
                        <div class="notification-item">
                            <div class="notification-icon small warning">
                                <img src="{{ asset('assets/images/alert-circle.png') }}" alt="Warning">
                            </div>
                            <div class="notification-content">
                                <h3>Paracetamol 500mg Akan Kadaluarsa</h3>
                                <p>Dalam 89 hari</p>
                                <div class="notification-date">23 Februari 2025</div>
                            </div>
                        </div>
                        
                        <div class="notification-item">
                            <div class="notification-icon small warning">
                                <img src="{{ asset('assets/images/alert-circle.png') }}" alt="Warning">
                            </div>
                            <div class="notification-content">
                                <h3>Amoxicillin 500mg Akan Kadaluarsa</h3>
                                <p>Dalam 73 hari</p>
                                <div class="notification-date">21 Februari 2025</div>
                            </div>
                        </div>
                        
                        <div class="notifications-footer">
                            <a href="#">Lihat semua notifikasi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection