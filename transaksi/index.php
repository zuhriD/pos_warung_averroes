<?php include 'action.php'; ?>
<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Inventory Management - Warung Averroes</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "outline-variant": "#bbcabf",
                        "surface-container-lowest": "#ffffff",
                        "surface-container-low": "#f2f4f6",
                        "on-tertiary": "#ffffff",
                        "secondary-fixed-dim": "#b7c8e1",
                        "primary-container": "#10b981",
                        "surface-bright": "#f7f9fb",
                        "on-secondary-fixed": "#0b1c30",
                        "on-error": "#ffffff",
                        "surface-tint": "#006c49",
                        "secondary-fixed": "#d3e4fe",
                        "surface-container-high": "#e6e8ea",
                        "primary": "#006c49",
                        "outline": "#6c7a71",
                        "tertiary-fixed-dim": "#ffb95f",
                        "tertiary": "#855300",
                        "surface-container-highest": "#e0e3e5",
                        "on-secondary-fixed-variant": "#38485d",
                        "on-tertiary-container": "#523200",
                        "error": "#ba1a1a",
                        "primary-fixed-dim": "#4edea3",
                        "on-primary-container": "#00422b",
                        "on-background": "#191c1e",
                        "surface-container": "#eceef0",
                        "on-surface": "#191c1e",
                        "primary-fixed": "#6ffbbe",
                        "on-primary": "#ffffff",
                        "on-secondary-container": "#54647a",
                        "surface-variant": "#e0e3e5",
                        "on-tertiary-fixed-variant": "#653e00",
                        "background": "#f7f9fb",
                        "error-container": "#ffdad6",
                        "surface": "#f7f9fb",
                        "on-primary-fixed-variant": "#005236",
                        "surface-dim": "#d8dadc",
                        "tertiary-container": "#e29100",
                        "inverse-primary": "#4edea3",
                        "inverse-on-surface": "#eff1f3",
                        "tertiary-fixed": "#ffddb8",
                        "on-tertiary-fixed": "#2a1700",
                        "inverse-surface": "#2d3133",
                        "secondary": "#505f76",
                        "on-secondary": "#ffffff",
                        "on-error-container": "#93000a",
                        "on-surface-variant": "#3c4a42",
                        "on-primary-fixed": "#002113",
                        "secondary-container": "#d0e1fb"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "xs": "4px",
                        "sm": "8px",
                        "lg": "24px",
                        "md": "16px",
                        "base": "4px",
                        "margin": "24px",
                        "gutter": "16px",
                        "xl": "32px"
                    },
                    "fontFamily": {
                        "price-display": ["Inter"],
                        "headline-sm": ["Inter"],
                        "label-md": ["Inter"],
                        "body-md": ["Inter"],
                        "label-lg": ["Inter"],
                        "body-lg": ["Inter"],
                        "headline-md": ["Inter"],
                        "headline-lg": ["Inter"],
                        "body-sm": ["Inter"]
                    },
                    "fontSize": {
                        "price-display": ["40px", {
                            "lineHeight": "48px",
                            "letterSpacing": "-0.03em",
                            "fontWeight": "800"
                        }],
                        "headline-sm": ["20px", {
                            "lineHeight": "28px",
                            "fontWeight": "600"
                        }],
                        "label-md": ["12px", {
                            "lineHeight": "16px",
                            "fontWeight": "500"
                        }],
                        "body-md": ["16px", {
                            "lineHeight": "24px",
                            "fontWeight": "400"
                        }],
                        "label-lg": ["14px", {
                            "lineHeight": "20px",
                            "letterSpacing": "0.05em",
                            "fontWeight": "600"
                        }],
                        "body-lg": ["18px", {
                            "lineHeight": "28px",
                            "fontWeight": "400"
                        }],
                        "headline-md": ["24px", {
                            "lineHeight": "32px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "600"
                        }],
                        "headline-lg": ["32px", {
                            "lineHeight": "40px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "body-sm": ["14px", {
                            "lineHeight": "20px",
                            "fontWeight": "400"
                        }]
                    }
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }

        .pb-safe {
            padding-bottom: env(safe-area-inset-bottom);
        }
    </style>
</head>

<body class="bg-surface text-on-surface flex min-h-screen">
    <!-- SideNavBar (Shared Component) -->
    <?php
    require_once '../layout/sidebar.php';
    ?>
    <!-- Main Content Area -->
    <main class="flex-1 flex flex-col h-screen overflow-hidden">
        <!-- TopNavBar (Shared Component) -->
        <?php
        $page_name = "Transaksi";
        require_once '../layout/top_navbar.php';
        ?>
        <!-- Scrollable Canvas -->
        <div class="flex-1 overflow-y-auto p-6 space-y-6 bg-surface-container-lowest">

            <!-- Controls: Search & Actions -->
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 bg-white p-4 rounded-xl shadow-sm border border-slate-100">
                <div class="flex flex-1 items-center space-x-3">
                    <div class="relative flex-1 max-w-md">
                        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400" data-icon="search">search</span>
                        <input class="w-full pl-10 pr-4 py-2.5 rounded-lg border border-slate-200 focus:ring-2 focus:ring-primary focus:border-primary text-body-sm transition-all" placeholder="Search product name, SKU..." type="text" />
                    </div>
                    <select class="py-2.5 px-4 rounded-lg border border-slate-200 bg-white text-body-sm focus:ring-2 focus:ring-primary focus:border-primary">
                        <option>All Categories</option>
                        <option>Food</option>
                        <option>Drinks</option>
                        <option>Staple</option>
                        <option>Dairy</option>
                    </select>
                    <select class="py-2.5 px-4 rounded-lg border border-slate-200 bg-white text-body-sm focus:ring-2 focus:ring-primary focus:border-primary">
                        <option>All Stock Levels</option>
                        <option>In Stock</option>
                        <option>Low Stock</option>
                        <option>Out of Stock</option>
                    </select>
                </div>
                <a href="insert.php" class="bg-primary text-white font-label-lg px-6 py-3 rounded-lg flex items-center justify-center space-x-2 hover:bg-emerald-700 transition-all active:scale-95 shadow-md shadow-emerald-200">
                    <span class="material-symbols-outlined" data-icon="add">add</span>
                    <span>Add New Transaksi</span>
                </a>
            </div>
            <!-- Inventory Table -->
            <div class="bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead>
                            <tr class="bg-slate-50 border-b border-slate-100">
                                <th class="px-6 py-4 text-label-md font-label-md text-slate-500 uppercase tracking-wider">No</th>
                                <th class="px-6 py-4 text-label-md font-label-md text-slate-500 uppercase tracking-wider">Tanggal Transaksi</th>
                                <th class="px-6 py-4 text-label-md font-label-md text-slate-500 uppercase tracking-wider">User / Kasir</th>
                                <th class="px-6 py-4 text-label-md font-label-md text-slate-500 uppercase tracking-wider">Total Pembelian</th>
                                <th class="px-6 py-4 text-label-md font-label-md text-slate-500 uppercase tracking-wider text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-50">
                            <?php

                            $data = readTransaksi($conn);
                            $no = 1;

                            while ($row = $data->fetch_assoc()) {
                            ?>
                                <!-- Low Stock Item -->
                                <tr class="hover:bg-slate-50 transition-colors">
                                    <td class="px-6 py-4">
                                        <p><?= $no++ ?></p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="px-2 py-1"><?= $row['tgl_transaksi'] ?></span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="px-2 py-1 bg-emerald-50 text-emerald-700 text-label-md rounded-full"><?= $row['nama_user'] ?></span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="px-2 py-1">Rp <?= number_format($row['total_pembelian'], 0, ',', '.') ?></span>
                                    </td>

                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end space-x-2">
                                            <a class="p-2 text-slate-400 hover:text-primary transition-colors" href="edit.php?aksi=edit&id=<?= $row['id'] ?>"><span class="material-symbols-outlined" data-icon="edit">edit</span></a>
                                            <a class="p-2 text-slate-400 hover:text-error transition-colors" href="action.php?aksi=delete&id=<?= $row['id'] ?>" onclick="return confirm('Apakah anda yakin mau menghapus transaksi ini?')"><span class="material-symbols-outlined" data-icon="delete">delete</span></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                            }

                            ?>


                        </tbody>
                    </table>
                </div>
                <!-- Pagination -->
                <!-- <div class="px-6 py-4 bg-slate-50 border-t border-slate-100 flex items-center justify-between">
                    <p class="text-body-sm text-slate-500">Showing 1 to 10 of 1,284 results</p>
                    <div class="flex items-center space-x-1">
                        <button class="p-2 rounded border border-slate-200 text-slate-400 hover:bg-white disabled:opacity-50" disabled="">
                            <span class="material-symbols-outlined" data-icon="chevron_left">chevron_left</span>
                        </button>
                        <button class="px-3 py-1 rounded bg-primary text-white text-body-sm font-bold">1</button>
                        <button class="px-3 py-1 rounded hover:bg-white text-slate-600 text-body-sm font-medium">2</button>
                        <button class="px-3 py-1 rounded hover:bg-white text-slate-600 text-body-sm font-medium">3</button>
                        <span class="px-2 text-slate-400 text-body-sm">...</span>
                        <button class="px-3 py-1 rounded hover:bg-white text-slate-600 text-body-sm font-medium">129</button>
                        <button class="p-2 rounded border border-slate-200 text-slate-400 hover:bg-white">
                            <span class="material-symbols-outlined" data-icon="chevron_right">chevron_right</span>
                        </button>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- BottomNavBar (Shared Component Mobile Only) -->
        <nav class="md:hidden fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-2 pb-safe h-16 bg-white dark:bg-slate-900 border-t border-slate-200 dark:border-slate-800 shadow-[0_-2px_10px_rgba(0,0,0,0.05)]">
            <a class="flex flex-col items-center justify-center text-slate-500 dark:text-slate-400 hover:text-emerald-500" href="#">
                <span class="material-symbols-outlined" data-icon="shopping_cart">shopping_cart</span>
                <span class="text-[10px] font-semibold">POS</span>
            </a>
            <a class="flex flex-col items-center justify-center bg-emerald-100 dark:bg-emerald-900/50 text-emerald-800 dark:text-emerald-100 rounded-2xl px-4 py-1" href="#">
                <span class="material-symbols-outlined" data-icon="inventory" style="font-variation-settings: 'FILL' 1;">inventory</span>
                <span class="text-[10px] font-semibold">Stock</span>
            </a>
            <a class="flex flex-col items-center justify-center text-slate-500 dark:text-slate-400 hover:text-emerald-500" href="#">
                <span class="material-symbols-outlined" data-icon="receipt_long">receipt_long</span>
                <span class="text-[10px] font-semibold">Orders</span>
            </a>
            <a class="flex flex-col items-center justify-center text-slate-500 dark:text-slate-400 hover:text-emerald-500" href="#">
                <span class="material-symbols-outlined" data-icon="menu">menu</span>
                <span class="text-[10px] font-semibold">More</span>
            </a>
        </nav>
    </main>
</body>

</html>