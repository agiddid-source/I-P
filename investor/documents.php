<?php
require_once __DIR__ . '/../config/app.php';

$pageTitle = 'Documents';
$bodyClass = 'bg-gray-50 text-gray-900';

$documents = [
    [
        'id' => 'DOC-2026-0048',
        'name' => 'Investment account statement',
        'category' => 'Statements',
        'date' => 'Nov 20, 2026',
        'format' => 'PDF',
        'size' => '248 KB',
        'description' => 'Illustrative account activity and balance summary.',
        'icon' => 'fa-file-pdf',
        'icon_class' => 'bg-red-50 text-red-600',
    ],
    [
        'id' => 'DOC-2026-0047',
        'name' => 'Global Fixed Income Fund — order confirmation',
        'category' => 'Confirmations',
        'date' => 'Nov 18, 2026',
        'format' => 'PDF',
        'size' => '116 KB',
        'description' => 'Sample confirmation details for an investment order.',
        'icon' => 'fa-file-pdf',
        'icon_class' => 'bg-red-50 text-red-600',
    ],
    [
        'id' => 'DOC-2026-0046',
        'name' => 'Cash account activity',
        'category' => 'Statements',
        'date' => 'Nov 15, 2026',
        'format' => 'CSV',
        'size' => '32 KB',
        'description' => 'Illustrative cash account entries for the sample period.',
        'icon' => 'fa-file-csv',
        'icon_class' => 'bg-emerald-50 text-emerald-700',
    ],
    [
        'id' => 'DOC-2026-0045',
        'name' => 'Withdrawal request summary',
        'category' => 'Confirmations',
        'date' => 'Nov 12, 2026',
        'format' => 'PDF',
        'size' => '94 KB',
        'description' => 'Sample withdrawal request and status summary.',
        'icon' => 'fa-file-pdf',
        'icon_class' => 'bg-red-50 text-red-600',
    ],
    [
        'id' => 'DOC-2026-0044',
        'name' => 'Investor account profile',
        'category' => 'Account',
        'date' => 'Nov 01, 2026',
        'format' => 'PDF',
        'size' => '82 KB',
        'description' => 'Illustrative account profile details.',
        'icon' => 'fa-file-pdf',
        'icon_class' => 'bg-red-50 text-red-600',
    ],
];

$categories = ['All documents', 'Statements', 'Confirmations', 'Account'];

include ROOT_PATH . '/components/shared/head.php';
include ROOT_PATH . '/components/investor/sidebar.php';
include ROOT_PATH . '/components/investor/topbar.php';
?>

<main class="min-h-screen lg:pl-64">
    <div class="mx-auto max-w-7xl px-4 pb-24 pt-6 sm:px-6 lg:px-8 lg:pb-10">
        <div class="mb-7">
            <p class="text-sm font-medium text-gray-500">Account</p>
            <h1 class="mt-1 text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Documents</h1>
            <p class="mt-2 max-w-2xl text-sm leading-6 text-gray-500">
                Find sample statements, order confirmations, and account documents in one place.
            </p>
        </div>

        <section class="rounded-2xl border border-gray-200 bg-white p-5 shadow-sm sm:p-6">
            <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <h2 class="text-base font-semibold text-gray-900">Document library</h2>
                    <p class="mt-1 text-sm text-gray-500"><?= count($documents) ?> sample documents</p>
                </div>

                <div class="flex flex-col gap-3 sm:flex-row">
                    <div class="relative">
                        <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-sm text-gray-400"></i>
                        <input id="documentSearch" type="search" placeholder="Search documents..."
                               class="w-full rounded-lg border border-gray-200 py-2.5 pl-9 pr-3 text-sm outline-none transition focus:border-[#0F9D78] focus:ring-2 focus:ring-[#0F9D78]/10 sm:w-64">
                    </div>
                    <select id="documentCategory"
                            class="rounded-lg border border-gray-200 bg-white px-3 py-2.5 text-sm text-gray-700 outline-none focus:border-[#0F9D78] focus:ring-2 focus:ring-[#0F9D78]/10">
                        <?php foreach ($categories as $category): ?>
                            <option value="<?= htmlspecialchars($category) ?>"><?= htmlspecialchars($category) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div id="documentList" class="mt-5 divide-y divide-gray-100">
                <?php foreach ($documents as $document): ?>
                    <article class="document-row flex flex-col gap-4 py-5 first:pt-0 last:pb-0 sm:flex-row sm:items-center sm:justify-between"
                             data-search="<?= htmlspecialchars(strtolower($document['name'] . ' ' . $document['description'] . ' ' . $document['id'])) ?>"
                             data-category="<?= htmlspecialchars($document['category']) ?>">
                        <div class="flex min-w-0 items-start gap-4">
                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl <?= $document['icon_class'] ?>">
                                <i class="fa-solid <?= $document['icon'] ?> text-lg"></i>
                            </div>
                            <div class="min-w-0">
                                <h3 class="text-sm font-semibold text-gray-900"><?= htmlspecialchars($document['name']) ?></h3>
                                <p class="mt-1 text-sm leading-5 text-gray-500"><?= htmlspecialchars($document['description']) ?></p>
                                <div class="mt-2 flex flex-wrap items-center gap-x-2 gap-y-1 text-xs text-gray-400">
                                    <span><?= htmlspecialchars($document['date']) ?></span>
                                    <span aria-hidden="true">·</span>
                                    <span><?= htmlspecialchars($document['format']) ?></span>
                                    <span aria-hidden="true">·</span>
                                    <span><?= htmlspecialchars($document['size']) ?></span>
                                    <span aria-hidden="true">·</span>
                                    <span><?= htmlspecialchars($document['category']) ?></span>
                                </div>
                            </div>
                        </div>

                        <button type="button"
                                class="document-preview inline-flex shrink-0 items-center justify-center gap-2 rounded-lg border border-gray-200 px-4 py-2.5 text-sm font-semibold text-gray-700 transition hover:bg-gray-50"
                                data-name="<?= htmlspecialchars($document['name']) ?>"
                                data-format="<?= htmlspecialchars($document['format']) ?>"
                                data-id="<?= htmlspecialchars($document['id']) ?>">
                            <i class="fa-regular fa-eye"></i>
                            Preview
                        </button>
                    </article>
                <?php endforeach; ?>
            </div>

            <div id="documentEmpty" class="hidden py-12 text-center">
                <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-gray-100 text-gray-400">
                    <i class="fa-solid fa-folder-open text-lg"></i>
                </div>
                <p class="mt-3 text-sm font-semibold text-gray-900">No matching documents</p>
                <p class="mt-1 text-sm text-gray-500">Try a different search term or category.</p>
            </div>
        </section>

        <div class="mt-6 rounded-xl border border-blue-100 bg-blue-50 p-4">
            <div class="flex gap-3">
                <i class="fa-solid fa-circle-info mt-0.5 text-blue-600"></i>
                <div>
                    <p class="text-sm font-semibold text-blue-900">Prototype notice</p>
                    <p class="mt-1 text-sm leading-5 text-blue-800">
                        These are mock document listings. Preview opens a sample information panel only; no actual statement or downloadable file is stored here.
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>

<div id="documentModal" class="fixed inset-0 z-[100] hidden items-center justify-center bg-gray-950/50 p-4" role="dialog" aria-modal="true" aria-labelledby="documentModalTitle">
    <div class="w-full max-w-md rounded-2xl bg-white p-6 shadow-xl">
        <div class="flex items-start justify-between gap-4">
            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-gray-100 text-gray-600">
                <i class="fa-solid fa-file-lines text-lg"></i>
            </div>
            <button type="button" id="closeDocumentModal" aria-label="Close preview"
                    class="flex h-9 w-9 items-center justify-center rounded-lg text-gray-400 transition hover:bg-gray-100 hover:text-gray-700">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
        <h2 id="documentModalTitle" class="mt-4 text-lg font-bold text-gray-900">Document preview</h2>
        <p id="documentModalName" class="mt-2 text-sm font-semibold text-gray-700"></p>
        <p id="documentModalReference" class="mt-1 text-xs text-gray-400"></p>
        <div class="mt-5 rounded-xl border border-dashed border-gray-300 bg-gray-50 px-5 py-8 text-center">
            <i class="fa-solid fa-file-circle-exclamation text-2xl text-gray-400"></i>
            <p class="mt-3 text-sm font-semibold text-gray-700">Sample preview only</p>
            <p class="mt-1 text-sm leading-5 text-gray-500">
                No document file is attached to this prototype record.
            </p>
        </div>
        <button type="button" id="closeDocumentModalFooter"
                class="mt-5 w-full rounded-lg bg-[#0B1F33] px-4 py-2.5 text-sm font-semibold text-white hover:bg-[#163A59]">
            Close preview
        </button>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('documentSearch');
    const categorySelect = document.getElementById('documentCategory');
    const rows = Array.from(document.querySelectorAll('.document-row'));
    const emptyState = document.getElementById('documentEmpty');
    const modal = document.getElementById('documentModal');

    function filterDocuments() {
        const query = searchInput.value.trim().toLowerCase();
        const category = categorySelect.value;
        let visibleCount = 0;

        rows.forEach(function (row) {
            const matchesSearch = row.dataset.search.includes(query);
            const matchesCategory = category === 'All documents' || row.dataset.category === category;
            const visible = matchesSearch && matchesCategory;

            row.classList.toggle('hidden', !visible);
            if (visible) visibleCount++;
        });

        emptyState.classList.toggle('hidden', visibleCount > 0);
    }

    function closeModal() {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }

    searchInput.addEventListener('input', filterDocuments);
    categorySelect.addEventListener('change', filterDocuments);

    document.querySelectorAll('.document-preview').forEach(function (button) {
        button.addEventListener('click', function () {
            document.getElementById('documentModalName').textContent = button.dataset.name;
            document.getElementById('documentModalReference').textContent =
                button.dataset.id + ' · ' + button.dataset.format + ' · Preview unavailable in prototype';

            modal.classList.remove('hidden');
            modal.classList.add('flex');
        });
    });

    document.getElementById('closeDocumentModal').addEventListener('click', closeModal);
    document.getElementById('closeDocumentModalFooter').addEventListener('click', closeModal);

    modal.addEventListener('click', function (event) {
        if (event.target === modal) closeModal();
    });

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape' && !modal.classList.contains('hidden')) closeModal();
    });
});
</script>

<?php include ROOT_PATH . '/components/investor/bottom-nav.php'; ?>
<?php include ROOT_PATH . '/components/shared/footer.php'; ?>