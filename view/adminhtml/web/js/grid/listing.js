/**
 * @category   Mageefy
 * @package    Mageefy_OrderStatusColor
 * @author     Mageefy Extension Team
 * @copyright  Copyright (c) Mageefy ( https://www.mageefy.com )
 * @license    https://www.mageefy.com/license-agreement
 */

define([], function () {
    'use strict';

    var mixin = {
        defaults: {
            template: 'Mageefy_OrderStatusColor/ui/grid/listing'
        },
        getRowStyle: function (row) {
            var styles='';

            if(row.color_order!='')
                styles =  'background: '+row.color_order;
            else
                styles = '';

            return styles;
        }
    };

    return function(target) {
        return target.extend(mixin);
    };

});