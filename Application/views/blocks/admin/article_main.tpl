[{$smarty.block.parent}]
[{if $oxid != "-1"}]
<tr>
    <td class="edittext">
        [{oxmultilang ident="OXTRD_PREPAYMENT"}]
    </td>
    <td class="edittext">
        <input type="text" name="editval[oxarticles__oxtrd_prepayment]" value="[{$prepayment}]" class="edittext">
    </td>
</tr>
<tr>
    <td class="edittext">
        [{oxmultilang ident="OXTRD_PRE_MONTH"}]
    </td>
    <td class="edittext">
        <input type="text" name="editval[oxarticles__oxtrd_pre_month]" value="[{$pre_month}]" class="edittext">
    </td>
</tr>
<tr>
    <td class="edittext">
        [{oxmultilang ident="OXTRD_PREPAYMENT_MONTH"}]
    </td>
    <td class="edittext">
        <input type="text" name="editval[oxarticles__oxtrd_prepayment_month]" value="[{$prepayment_month}]" class="edittext">
    </td>
</tr>
[{/if}]