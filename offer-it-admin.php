<div class="wrap">
	<h2>OfferIT Integration Configuration</h2>
	<p>This plugin allows you to integrate <a target="_blank" href="http://offerit.com">OfferIT.com</a> Affiliate Tracking System with your current e-commerce Word Press plugin.</p>
	
	<form method="post" action="options.php">
		<input type="hidden" name="action" value="update" />
		<input type="hidden" name="page_options" value="offer_it_domain,offer_it_username,offer_it_apikey,offer_it_tracking_code,offer_it_landing_url,offer_it_conversion_url,offer_it_conversion_ouid,offer_it_db_table,offer_it_db_column,offer_it_log,offer_it_map_total,offer_it_map_first_name,offer_it_map_last_name,offer_it_map_address1,offer_it_map_address2,offer_it_map_city,offer_it_map_state,offer_it_map_zip,offer_it_map_country,offer_it_map_email,offer_it_map_phone,offer_it_map_custom1,offer_it_map_custom2,offer_it_map_custom3,offer_it_map_custom4,offer_it_map_custom5" />
		
		<?php wp_nonce_field('update-options'); ?>
	
		<table>
			<tr>
				<td colspan="2" align="left">
					<h3>Offer IT API access</h3>
					<p>Here's some more information how to <a target="_blank" href="http://wiki.offerit.com/index.php/Offerit_API">generate API access key</a>.<br />
					Your OfferIT landing page URL needs to contain %%transid%% variable in order to match affiliate forwarding traffic to your website.
				</td>
			</tr>
			<tr>
				<th align="left">Tracking domain:</th>
				<td align="left">
					<input name="offer_it_domain" type="text" size="32" value="<?php echo get_option('offer_it_domain'); ?>" />
					Don't include http://
				</td>
			</tr>
			<tr>
				<th align="left">User name:</th>
				<td align="left"><input name="offer_it_username" type="text" size="32" value="<?php echo get_option('offer_it_username'); ?>" /></td>
			</tr>
			<tr>
				<th align="left">API key:</th>
				<td align="left"><input name="offer_it_apikey"   type="text" size="32" value="<?php echo get_option('offer_it_apikey'); ?>" /></td>
			</tr>


			<tr>
				<td colspan="2" align="left">
					<h3>Conversion Tracking</h3>
					<p>In order to fire up <a target="_blank" href="http://wiki.offerit.com/index.php/Affiliate_Custom_Pixels">OfferIT conversion tracking pixel</a> 
					you need to specify your conversion URL<br />and unique order variable, that will be used to track placed orders and affiliate commissions.</p>

					<p>For example for <a targe="_blank" href="http://cart66.com/">Cart66 plugin</a> default conversion page is: &quot;<u>/store/receipt/?ouid=</u>&quot; 
					and its unique variable used to identify orders: &quot;<u>ouid&quot;</u>.<br />
					When plugin detects visitor landing on conversion page, it will trigger conversion POST to OfferIT system.</p>
				</td>
			</tr>
			<tr>
				<th align="left">Default tracking code:</th>
				<td align="left">
					<input name="offer_it_tracking_code"  type="text" size="32" value="<?php echo get_option('offer_it_tracking_code'); ?>" />
					Default <a target="_blank" href="http://wiki.offerit.com/index.php/Offeritcode">ocode</a> used when URL request does not contain one
				</td>
			</tr>
			<tr>
				<th align="left">Landing URL:</th>
				<td align="left">
					<input name="offer_it_landing_url"  type="text" size="32" value="<?php echo get_option('offer_it_landing_url'); ?>" />
					(ex. /store/checkout/). URL to trigger tracking redirection.
				</td>
			</tr>
			<tr>
				<th align="left">Conversion URL:</th>
				<td align="left">
					<input name="offer_it_conversion_url"  type="text" size="32" value="<?php echo get_option('offer_it_conversion_url'); ?>" />
					(ex. /store/receipt/). URL to trigger conversion post
				</td>
			</tr>
			<tr>
				<th align="left">Conversion variable:</th>
				<td align="left">
					<input name="offer_it_conversion_ouid" type="text" size="32" value="<?php echo get_option('offer_it_conversion_ouid'); ?>" />
					Unique order ID (ex. ouid)
				</td>
			</tr>


			<tr>
				<td colspan="2" align="left">
					<h3>Database source</h3>
				</td>
			</tr>
			<tr>
				<th align="left">Database table:</th>
				<td align="left">
					<input name="offer_it_db_table"  type="text" size="32" value="<?php echo get_option('offer_it_db_table'); ?>" />
					(ex. cart66_orders). Database table name containing processed order information
				</td>
			</tr>
			<tr>
				<th align="left">Database column:</th>
				<td align="left">
					<input name="offer_it_db_column"  type="text" size="32" value="<?php echo get_option('offer_it_db_column'); ?>" />
					(ex. ouid). Database column name containing unique order IDs
				</td>
			</tr>


			<tr>
				<td colspan="2" align="left">
					<h3>Database mapping</h3>
					<p>This information will be queried from database table configured above in order to construct conversion post to OfferIT system.<br />
					The example fields are provided based on Cart66 plugin.</p>
				</td>
			</tr>
			<tr>
				<th align="left">Transaction total:</th>
				<td align="left">
					<input name="offer_it_map_total"       type="text" size="32" value="<?php echo get_option('offer_it_map_total'); ?>" />
					(ex. total). Transaction total
				</td>
			</tr>
			<tr>
				<th align="left">First Name:</th>
				<td align="left">
					<input name="offer_it_map_first_name"  type="text" size="32" value="<?php echo get_option('offer_it_map_first_name'); ?>" />
					(ex. bill_first_name). Client first name
				</td>
			</tr>
			<tr>
				<th align="left">Last Name:</th>
				<td align="left">
					<input name="offer_it_map_last_name"   type="text" size="32" value="<?php echo get_option('offer_it_map_last_name'); ?>" />
					(ex. bill_last_name). Client last name
				</td>
			</tr>
			<tr>
				<th align="left">Address 1:</th>
				<td align="left">
					<input name="offer_it_map_address1"    type="text" size="32" value="<?php echo get_option('offer_it_map_address1'); ?>" />
					(ex. bill_address). Client address
				</td>
			</tr>
			<tr>
				<th align="left">Address 2:</th>
				<td align="left">
					<input name="offer_it_map_address2"    type="text" size="32" value="<?php echo get_option('offer_it_map_address2'); ?>" />
					(ex. bill_address2). Client address
				</td>
			</tr>
			<tr>
				<th align="left">City:</th>
				<td align="left">
					<input name="offer_it_map_city"        type="text" size="32" value="<?php echo get_option('offer_it_map_city'); ?>" />
					(ex. bill_city). Client city
				</td>
			</tr>
			<tr>
				<th align="left">State:</th>
				<td align="left">
					<input name="offer_it_map_state"       type="text" size="32" value="<?php echo get_option('offer_it_map_state'); ?>" />
					(ex. bill_state). Client state
				</td>
			</tr>
			<tr>
				<th align="left">Zip:</th>
				<td align="left">
					<input name="offer_it_map_zip"         type="text" size="32" value="<?php echo get_option('offer_it_map_zip'); ?>" />
					(ex. bill_zip). Client zip code
				</td>
			</tr>
			<tr>
				<th align="left">Country:</th>
				<td align="left">
					<input name="offer_it_map_country"     type="text" size="32" value="<?php echo get_option('offer_it_map_country'); ?>" />
					(ex. bill_country). Client country
				</td>
			</tr>
			<tr>
				<th align="left">Email:</th>
				<td align="left">
					<input name="offer_it_map_email"       type="text" size="32" value="<?php echo get_option('offer_it_map_email'); ?>" />
					(ex. email). Client email
				</td>
			</tr>
			<tr>
				<th align="left">Phone:</th>
				<td align="left">
					<input name="offer_it_map_phone"       type="text" size="32" value="<?php echo get_option('offer_it_map_phone'); ?>" />
					(ex. phone). Client phone
				</td>
			</tr>
			<tr>
				<th align="left">Custom 1:</th>
				<td align="left">
					<input name="offer_it_map_custom1"  type="text" size="32" value="<?php echo get_option('offer_it_map_custom1'); ?>" />
					(ex. coupon). Custom information field
				</td>
			</tr>
			<tr>
				<th align="left">Custom 2:</th>
				<td align="left">
					<input name="offer_it_map_custom2"  type="text" size="32" value="<?php echo get_option('offer_it_map_custom2'); ?>" />
					(ex. trans_id). Custom information field
				</td>
			</tr>
			<tr>
				<th align="left">Custom 3:</th>
				<td align="left">
					<input name="offer_it_map_custom3"  type="text" size="32" value="<?php echo get_option('offer_it_map_custom3'); ?>" />
					(ex. notes). Custom information field
				</td>
			</tr>
			<tr>
				<th align="left">Custom 4:</th>
				<td align="left">
					<input name="offer_it_map_custom4"  type="text" size="32" value="<?php echo get_option('offer_it_map_custom4'); ?>" />
					(ex. custom_field). Custom information field
				</td>
			</tr>
			<tr>
				<th align="left">Custom 5:</th>
				<td align="left">
					<input name="offer_it_map_custom5"  type="text" size="32" value="<?php echo get_option('offer_it_map_custom5'); ?>" />
					(ex. additional_fields). Custom information field
				</td>
			</tr>


			<tr>
				<td colspan="2" align="left">
					<h3>Logging / Debug</h3>
				</td>
			<tr>
				<th align="left">Log activity:</th>
				<td align="left">
					<input name="offer_it_log" type="checkbox" value="1" <?php if(get_option('offer_it_log') == 1) echo 'checked="checked"'; ?> />
					Turn on plugin log activity &nbsp;
<!--
					<input type="submit" value="Show activity log" />
					<input type="submit" value="Empty activity log" />
-->
				</td>
			</tr>
			</tr>
		</table>
		
		<p><input type="submit" value="<?php _e('Save Changes') ?>" style="font-size: 4em" /></p>
	</form>
</div>
