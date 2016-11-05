﻿<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2016, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2016, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['form_validation_required']              = '必须填写<i>{field}</i>。';
$lang['form_validation_isset']                 = '<i>{field}</i>必须有值。';
$lang['form_validation_valid_email']           = '<i>{field}</i>必须填写有效的电邮地址。';
$lang['form_validation_valid_emails']          = '<i>{field}</i>必须包含全部有效的电邮地址。';
$lang['form_validation_valid_url']             = '<i>{field}</i>必须填写有效的网址。';
$lang['form_validation_valid_ip']              = '<i>{field}</i>必须填写有效的IP地址。';
$lang['form_validation_min_length']            = '<i>{field}</i>最少必需有{param}个字。';
$lang['form_validation_max_length']            = '<i>{field}</i>不可有超过{param}个字。';
$lang['form_validation_exact_length']          = '<i>{field}</i>必须填写{param}个字。';
$lang['form_validation_alpha']                 = '<i>{field}</i>只可以填写英文字母。';
$lang['form_validation_alpha_numeric']         = '<i>{field}</i>只可以填写英文字母或阿拉伯数目字。';
$lang['form_validation_alpha_numeric_spaces']  = '<i>{field}</i>只可以填写英文字母、阿拉伯数目字或空格。';
$lang['form_validation_alpha_dash']            = '<i>{field}</i>只可以填写英文字母、阿拉伯数目字、底线或连字号（-）。';
$lang['form_validation_numeric']               = '<i>{field}</i>只可以填写阿拉伯数目字。';
$lang['form_validation_is_numeric']            = '<i>{field}</i>只可以填写阿拉伯数目字。';
$lang['form_validation_integer']               = '<i>{field}</i>只可以填写整数。';
$lang['form_validation_regex_match']           = '<i>{field}</i>里填写的内容，格式不正确。';
$lang['form_validation_matches']               = '<i>{field}</i>的内容不配合<i>{param}</i>的内容。';
$lang['form_validation_differs']               = '<i>{field}</i>的内容必须不同于<i>{param}</i>的内容。';
$lang['form_validation_is_unique']             = '<i>{field}</i>不可以再使用这个值。';
$lang['form_validation_is_natural']            = '<i>{field}</i>只可以填写0至9等个位数字。';
$lang['form_validation_is_natural_no_zero']    = '<i>{field}</i>只可以填写1至9等个位数字。';
$lang['form_validation_decimal']               = '<i>{field}</i>内必须填写有小数点的数字。';
$lang['form_validation_less_than']             = '<i>{field}</i>只可以填写少于{param}的数字。';
$lang['form_validation_less_than_equal_to']    = '<i>{field}</i>只可以填写少于或等于{param}的数字。';
$lang['form_validation_greater_than']          = '<i>{field}</i>只可以填写大于{param}的数字。';
$lang['form_validation_greater_than_equal_to'] = '<i>{field}</i>只可以填写大于或等于{param}的数字。';
$lang['form_validation_error_message_not_set'] = '您在<i>{field}</i>格填写的资料错误而系统找不到回应的讯息。';
$lang['form_validation_in_list']               = '<i>{field}</i>只可以填写以下的其中之一：{param}。';