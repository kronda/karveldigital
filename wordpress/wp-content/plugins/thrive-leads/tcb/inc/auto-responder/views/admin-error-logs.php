
<h1>Thrive API Connections - error logs</h1>

<?php if (empty($errors)) : ?>
    <p>No errors found</p>
<?php else : ?>
    <table class="tcb-api-error-log widefat fixed" cellspacing="0">
        <thead>
        <tr>
            <th>Date</th>
            <th>Form Data</th>
            <th>Service</th>
            <th>Error Message</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($errors as $i => $error) : ?>
            <tr class="<?php echo $i % 2 ? 'alternate' : '' ?>">
                <td>
                    <?php echo $error['date'] ?>
                </td>
                <td>
                    Email: <?php echo $error['api_data']['email'] ?><br>
                    Name: <?php echo $error['api_data']['name'] ?>
                </td>
                <td>
                    <?php echo isset($connection_titles[$error['connection']]) ? $connection_titles[$error['connection']] : $error['connection'] ?>
                </td>
                <td>
                    <?php echo $error['error_message'] ?>
                </td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
<?php endif ?>