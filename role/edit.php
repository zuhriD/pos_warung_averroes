<?php include 'action.php' ?>
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
        require_once '../layout/top_navbar.php';
        ?>
        <!-- Scrollable Canvas -->
        <div class="flex-1 overflow-y-auto p-6 space-y-6 bg-surface-container-lowest">

            <div class="w-full max-w-5xl">
                <!-- Header Section -->
                <div class="flex flex-col md:flex-row md:items-center justify-between mb-lg gap-4">
                    <div>
                        <h1 class="font-headline-lg text-on-surface">Edit Role</h1>
                        <p class="text-body-md text-on-surface-variant">Edit role to your store's roles.</p>
                    </div>

                </div>
                <!-- Form Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-1 gap-lg">
                    <!-- Left Column: Details -->
                    <div class="lg:col-span-1 space-y-lg">
                        <!-- Basic Information Card -->
                        <section class="bg-surface-container-lowest p-lg rounded-xl border border-outline-variant shadow-sm">

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-md">
                                <div class="md:col-span-2 flex flex-col gap-xs">
                                    <form action="action.php?aksi=update" method="post">
                                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                        <label class="font-label-md text-on-surface-variant">Role Name</label>
                                        <input class="w-full p-md border border-outline-variant rounded-lg font-body-md focus:ring-2 focus:ring-primary-container focus:outline-none" placeholder="e.g. Admin" type="text" name="nama_role" value="<?= $data['name'] ?>" />

                                </div>

                            </div>
                            <div class="flex gap-3 mt-3 hidden md:flex">
                                <a href="index.php" class="px-lg py-3 rounded-xl border border-outline font-label-lg text-on-surface hover:bg-surface-container-high transition-colors">
                                    Cancel
                                </a>
                                <button type="submit" class="px-lg py-3 rounded-xl bg-primary text-on-primary font-label-lg hover:opacity-90 transition-opacity flex items-center gap-2">
                                    <span class="material-symbols-outlined" data-icon="save">save</span>
                                    Save Role
                                </button>

                            </div>
                        </section>

                    </div>

                </div>
                <!-- Footer Actions Mobile -->
                <div class="md:hidden mt-lg space-y-3 pb-xl">
                    <button class="w-full py-4 bg-primary text-on-primary rounded-xl font-label-lg shadow-lg">
                        <span class="material-symbols-outlined" data-icon="save">save</span>
                        Simpan
                    </button>
                    <button class="w-full py-4 bg-white border border-outline text-on-surface rounded-xl font-label-lg">
                        <span class="material-symbols-outlined" data-icon="cancel">cancel</span>
                        Batal
                    </button>
                    </form>
                </div>
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