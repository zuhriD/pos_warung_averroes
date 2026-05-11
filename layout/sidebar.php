<?php
// Ambil nama file saat ini
$current_page = basename($_SERVER['PHP_SELF']);
// atau bisa pakai dirname jika struktur folder: basename(dirname($_SERVER['PHP_SELF']))
?>

<aside class="hidden md:flex flex-col p-4 space-y-2 h-screen w-64 border-r border-slate-200 dark:border-slate-800 bg-slate-50 dark:bg-slate-950">
    <div class="flex items-center space-x-3 px-2 mb-8">
        <div class="w-10 h-10 rounded-xl bg-primary flex items-center justify-center text-white shadow-lg">
            <span class="material-symbols-outlined" data-icon="storefront">storefront</span>
        </div>
        <div>
            <h1 class="text-lg font-black text-slate-900 dark:text-white leading-tight">Warung Averroes</h1>
            <p class="text-[10px] uppercase tracking-wider text-slate-500 font-bold">Admin Terminal</p>
        </div>
    </div>

    <?php
    // Helper function untuk class aktif
    function nav_class(string $target_page): string
    {
        $current = basename(dirname($_SERVER['PHP_SELF'])); // ambil nama folder
        $active   = 'flex items-center space-x-3 px-3 py-2.5 bg-primary text-on-primary rounded-lg transition-transform active:scale-95 font-medium text-sm';
        $inactive = 'flex items-center space-x-3 px-3 py-2.5 text-slate-600 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-800 rounded-lg transition-transform active:scale-95 font-medium text-sm';
        return ($current === $target_page) ? $active : $inactive;
    }

    function icon_style(string $target_page): string
    {
        $current = basename(dirname($_SERVER['PHP_SELF']));
        return ($current === $target_page) ? "font-variation-settings: 'FILL' 1;" : '';
    }
    ?>

    <nav class="flex-1 space-y-1">
        <a class="<?= nav_class('dashboard') ?>" href="#">
            <span class="material-symbols-outlined" style="<?= icon_style('dashboard') ?>">dashboard</span>
            <span>Dashboard</span>
        </a>
        <a class="<?= nav_class('user') ?>" href="../user/index.php">
            <span class="material-symbols-outlined" style="<?= icon_style('user') ?>">people</span>
            <span>User</span>
        </a>
        <a class="<?= nav_class('role') ?>" href="../role/index.php">
            <span class="material-symbols-outlined" style="<?= icon_style('role') ?>">person_2</span>
            <span>Role</span>
        </a>
        <a class="<?= nav_class('category') ?>" href="../category/index.php">
            <span class="material-symbols-outlined" style="<?= icon_style('category') ?>">analytics</span>
            <span>Category</span>
        </a>
        <a class="<?= nav_class('product') ?>" href="../product/index.php">
            <span class="material-symbols-outlined" style="<?= icon_style('product') ?>">badge</span>
            <span>Product</span>
        </a>
        <a class="<?= nav_class('transaction') ?>" href="../transaction/index.php">
            <span class="material-symbols-outlined" style="<?= icon_style('transaction') ?>">point_of_sale</span>
            <span>Transaction</span>
        </a>
    </nav>

    <div class="pt-4 border-t border-slate-200 dark:border-slate-800 space-y-1">
        <button class="w-full text-left flex items-center space-x-3 px-3 py-2.5 text-slate-600 dark:text-slate-400 hover:bg-slate-200 dark:hover:bg-slate-800 rounded-lg transition-transform active:scale-95 font-medium text-sm">
            <span class="material-symbols-outlined">help</span>
            <span>Support</span>
        </button>
        <button class="w-full text-left flex items-center space-x-3 px-3 py-2.5 text-error hover:bg-red-50 dark:hover:bg-red-900/10 rounded-lg transition-transform active:scale-95 font-medium text-sm">
            <span class="material-symbols-outlined">logout</span>
            <span>Logout</span>
        </button>
    </div>
</aside>