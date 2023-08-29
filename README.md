
# Magento 2 Admin Order Status Color Extension

Magento 2 Admin Order Status Color extension allows store admin to set different background color for orders grid rows based on order statues. By default, Magento 2 does not assign specific colors to order statuses. However, you can customize the order status colors using customizations or extensions.

With this extension, you can maintain the custom colors for any order status using the RGB color picker. In Magento 2, the Order Status Color module allows you to customize the colors of order statuses in the admin panel. This feature helps you visually distinguish between different order statuses, making it easier to manage and track orders. By assigning specific colors to each status, you can quickly identify the current state of an order without having to read the status label.

By utilizing the Order Status Color module in Magento 2, you can enhance the visual representation of order statuses in the admin panel, making order management more efficient and intuitive. The module adds extra coloring features to admin grids at the Sales section. Assign specific colors to different order statuses, such as "Pending," "Processing," "Complete," "Canceled," etc.




## Features

- Set order grid rows with different background colours for different order statuses.
- The extension allows you to assign specific colors to different order statuses, providing visual cues for easy identification.
- An intuitive and user-friendly interface within the Magento admin panel enables you to configure and manage the color settings easily.
- You can choose from a wide range of color options, including a color picker or predefined color palettes, to set the desired color for each order status.
- You can set specific colors for pending or critical order statuses, making them more noticeable to the admin users.
- You can enhance the efficiency and speed of order processing, as well as improve overall order management.
- Easily add or remove colour each order status.
- Configure order status with customized colors.
- Easy installation and configuration
- Powerful & user-friendly admin features
- Easy to use and customize
- This extension is easy to use and manageable without any technical proficiency
- It is 100% open-source


## How to install this extension?
Under your root folder, run the following command lines:

- composer require mageefy/module-orderstatus-color
- php bin/magento setup:upgrade
- php bin/magento setup:di:compile
- php bin/magento setup:static-content:deploy
- php bin/magento cache:flush


## Configuration
Go To STORES >> Order Status >> Click on any order status and on next page you can see a new Color option field.

## Demo
https://demo.mageefy.com/autologin.php?login=moduledemo