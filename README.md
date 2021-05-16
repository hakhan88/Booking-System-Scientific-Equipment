# Description

This application is build using using php with Codeigniter framework. 
The pupose of this application is to provide booking functionality for the clients to book scientific equipments

## Codeigniter Setup

1. deploy this repo in the htdoc folder in your xampp setup
2. setup the DB and run the sql as below
3. open application/config/config.php and update $config['base_url'] to the name of the folder you created in the htdoc
4. open application/config/database.php and 'database' to the name of the DB you created in the phpmyadmin

## SQL Setup

Run the following SQL for the db you created: 

    SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
    SET AUTOCOMMIT = 0;
    START TRANSACTION;
    SET time_zone = "+00:00";

    CREATE TABLE `equipment` (
    `id` int(11) NOT NULL,
    `name` varchar(144) NOT NULL,
    `cost_internal` int(14) NOT NULL,
    `cost_industry` int(14) NOT NULL,
    `cost_nanocat` int(14) NOT NULL,
    `selection_by_hour` varchar(14) NOT NULL,
    `selection_by_calendar` varchar(14) NOT NULL,
    `under_maintenance` varchar(14) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;


    CREATE TABLE `events` (
    `id` int(11) NOT NULL,
    `title` varchar(255) NOT NULL,
    `start_date` varchar(144) NOT NULL,
    `end_date` varchar(144) NOT NULL,
    `sampleUnits` int(12) NOT NULL,
    `equipment` varchar(144) NOT NULL,
    `sampleId` int(14) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

    CREATE TABLE `expenses` (
    `id` int(11) NOT NULL,
    `total` varchar(144) NOT NULL,
    `user_id` int(144) NOT NULL,
    `status` int(12) NOT NULL,
    `image_path` varchar(344) NOT NULL,
    `date` varchar(144) NOT NULL,
    `events_id` int(12) NOT NULL,
    `quotation` int(14) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

    CREATE TABLE `logs` (
    `id` int(14) NOT NULL,
    `action` varchar(244) NOT NULL,
    `performedBy` varchar(244) NOT NULL,
    `date` date NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

    CREATE TABLE `sampledetails` (
    `id` int(11) NOT NULL,
    `details` varchar(11344) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;


    CREATE TABLE `users` (
    `id` int(11) NOT NULL,
    `username` varchar(300) NOT NULL,
    `lastname` varchar(144) NOT NULL,
    `email` varchar(144) NOT NULL,
    `studentId` varchar(344) NOT NULL,
    `phoneNumber` int(144) NOT NULL,
    `mailingAddress` varchar(244) NOT NULL,
    `mailingAddress2` varchar(244) NOT NULL,
    `internalStudent` varchar(144) NOT NULL,
    `student` varchar(14) NOT NULL,
    `matricCardFile` varchar(2144) NOT NULL,
    `password` varchar(144) NOT NULL,
    `rolePermissions` varchar(344) NOT NULL,
    `equipment` varchar(144) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

    INSERT INTO `users` (`id`, `username`, `lastname`, `email`, `studentId`, `phoneNumber`, `mailingAddress`, `mailingAddress2`, `internalStudent`, `student`, `matricCardFile`, `password`, `rolePermissions`, `equipment`) VALUES
    (1, 'some decent name', '', 'a_silent_soul5@hotmail.com', '123', 0, '123 ,123,123 ', 'street 2, kl', '1', '', 'D:/Apache/htdocs/nanocat/assets/images/Capture.PNG', '202cb962ac59075b964b07152d234b70', '1', 'DSC,InsituDSC,GPC,');

    ALTER TABLE `equipment`
    ADD PRIMARY KEY (`id`);

    ALTER TABLE `events`
    ADD PRIMARY KEY (`id`);

    ALTER TABLE `expenses`
    ADD PRIMARY KEY (`id`);

    ALTER TABLE `logs`
    ADD PRIMARY KEY (`id`);

    ALTER TABLE `sampledetails`
    ADD PRIMARY KEY (`id`);

    ALTER TABLE `users`
    ADD PRIMARY KEY (`id`);

    ALTER TABLE `equipment`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

    ALTER TABLE `events`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

    ALTER TABLE `expenses`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

    ALTER TABLE `logs`
    MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

    ALTER TABLE `sampledetails`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

    ALTER TABLE `users`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
    COMMIT;
