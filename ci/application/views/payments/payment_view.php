<?php if (isset($weeks)): ?>
    <div class="jumbotron">
        <h2>Add new record - Miscellaneous Labor Payments</h2>
        <form action="<?= site_url('payment/filter_adjusments') ?>" method="get">
            <label for="farm">Select farm:</label>
            <select name="farm" id="farm" onchange="updateWeeks()">
                <option value="" selected="true" disabled>Select farm</option>
                <?php foreach ($farms as $farm): ?>
                    <option value="<?= $farm->id ?>"><?= $farm->farm ?></option>
                <?php endforeach; ?>
            </select>
            <label for="week">Select Week:</label>
            <select name="week" id="week" onchange="checkSelections()">
                <option value="" selected="true" disabled>Select week</option>
            </select>

            <button type="submit" class="btn btn-primary" id="submitBtn" disabled>Filter</button>
        </form>
    </div>
    <div>
        <h5><a href="<?= site_url('payment/list_adjusments') ?>">📑 Consultar reportes ingresados</a></h5>
    </div>
    <!-- Overlay -->
    <div id="loadingOverlay" style="display: none;">
        <div class="overlay-content">Loading...</div>
    </div>

    <style>
        #loadingOverlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .overlay-content {
            color: white;
            font-size: 24px;
        }
    </style>

    <!-- Script para cargar las semanas dependiendo de la finca -->
    <script>
        function updateWeeks() {
            const farmSelect = document.getElementById('farm');
            const farmId = farmSelect.value;
            const farmName = farmSelect.options[farmSelect.selectedIndex].text;

            if (farmId) {
                showLoadingOverlay();

                fetch("<?= site_url('payment/get_weeks_by_farm') ?>", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({ farm_id: farmId })
                })
                    .then(response => response.json())
                    .then(data => {
                        const weekSelect = document.getElementById('week');
                        weekSelect.innerHTML = ''; // Limpiar el select
                        weekSelect.innerHTML = `<option value="" disabled>Select week (${farmName})</option>`; // Opción por defecto con el nombre del farm

                        // Llenar con las semanas disponibles
                        data.forEach(week => {
                            const option = document.createElement('option');
                            option.value = week.payment_week;
                            option.textContent = week.payment_week;
                            weekSelect.appendChild(option);
                        });

                        hideLoadingOverlay();
                        checkSelections(); // Verificar las selecciones después de actualizar las semanas
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        hideLoadingOverlay();
                    });
            }
        }

        function checkSelections() {
            const farmSelect = document.getElementById('farm');
            const weekSelect = document.getElementById('week');
            const submitBtn = document.getElementById('submitBtn');

            if (farmSelect.value && weekSelect.value) {
                submitBtn.disabled = false;
            } else {
                submitBtn.disabled = true;
            }
        }

        function showLoadingOverlay() {
            document.getElementById('loadingOverlay').style.display = 'flex';
        }

        function hideLoadingOverlay() {
            document.getElementById('loadingOverlay').style.display = 'none';
        }
    </script>

<?php endif; ?>

<?php if (isset($selected_week) && isset($selected_farm)): ?>
    <h2>Week: <?= $selected_week ?> - Farm: <?= $selected_farm ?></h2>
<?php endif; ?>

<?php if (isset($payments)): ?>
    <?php if ($payments != null): ?>
        <form
            action="<?= site_url('payment/save_adjusments?selected_week=' . $selected_week . '&selected_farm=' . $selected_farm) ?>"
            method="post">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Date</th>
                        <th>ID Doc</th>
                        <th>Operator Name</th>
                        <th>Supervisor</th>
                        <th>Subtask</th>
                        <th>Lot</th>
                        <th>Module</th>
                        <th>Quantity</th>
                        <th>Rate</th>
                        <th>Total</th>
                        <th>Bonus/Discount</th>
                        <th>Final Total</th>
                        <th>Observations</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($payments as $index => $payment): ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= $payment->operation_date ?></td>
                            <td><?= $payment->operator_iddoc ?></td>
                            <td><?= $payment->operator_name ?></td>
                            <td><?= $payment->supervisor_name ?></td>
                            <td><?= $payment->subtask_name ?></td>
                            <td><?= $payment->lot_name ?></td>
                            <td><?= $payment->module_name ?></td>
                            <td><?= number_format($payment->pm_quantity, 2) ?></td>
                            <td><?= number_format($payment->subtask_rate, 2) ?></td>
                            <td><span class="pm_total"><?= number_format($payment->pm_total, 2) ?></span></td>

                            <td>
                                <input type="number" name="payments[<?= $index ?>][bonus_discount]" step="0.01" value="0"
                                    class="form-control bonus-discount" data-total="<?= $payment->pm_total ?>">
                            </td>

                            <td>
                                <span class="final-total"><?= number_format($payment->pm_total, 2) ?></span>
                            </td>

                            <td>
                                <input type="text" name="payments[<?= $index ?>][observations]" class="form-control">
                            </td>
                            <input type="hidden" name="payments[<?= $index ?>][pm_id]" value="<?= $payment->id ?>">
                            <input type="hidden" name="payments[<?= $index ?>][week]" value="<?= $selected_week ?>">
                            <input type="hidden" name="payments[<?= $index ?>][operator_id_finca]"
                                value="<?= $payment->operator_id_finca ?>">
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <button type="submit" class="btn btn-success btn-lg">Save Payments</button>
        </form>
    <?php else: ?>
        <h2>No payments found.</h2>
    <?php endif ?>

    <!-- Script para el calculo del total de bonos y descuentos -->
    <script>
        $(document).ready(function () {
            // Calculate Total and apply to Final Total when input changes
            $('.bonus-discount').on('input', function () {
                var total = parseFloat($(this).data('total'));
                var bonusDiscount = parseFloat($(this).val());
                var finalTotal = total + bonusDiscount;

                $(this).parent().next().children('.final-total').text(finalTotal.toFixed(2));
            });

            // Calculate Final Total on page load
            $('.bonus-discount').each(function () {
                var total = parseFloat($(this).data('total'));
                var bonusDiscount = parseFloat($(this).val());
                var finalTotal = total + bonusDiscount;

                $(this).parent().next().children('.final-total').text(finalTotal.toFixed(2));
            });
        });
    </script>

<?php endif; ?>