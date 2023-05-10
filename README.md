# module-ilmakiage-coupon-url-m1
The module allows you to apply a coupon on any page by adding a URL parameter in the format of `<magento_page>?cpn=XXXXXXXXXX`

# How to install
1. Download the contents of the repository and place them in the following path `app/code/local/Ilmakiage/Coupon`
2. Create a new file `app/etc/modules/Ilmakiage_Coupon.xml`. Copy and paste the following XML code snippet in the file:
```xml
<?xml version="1.0"?>
<config>
    <modules>
        <Ilmakiage_Coupon>
            <active>true</active>
            <codePool>local</codePool>
        </Ilmakiage_Coupon>
    </modules>
</config>
```
3. Clean cache

# Followed the technical requirements
1. Can be called from any Magento page (homepage, product page, etc..) like <magento_page>?cpn=XXXXXXXXXX
2. Coupon itself should work based on the standard shopping cart price rule
3. Coupon should be applied after adding to cart automatically
4. Should work on the same session only
5. Magento module name should be called Ilmakiage_Coupon and put into /local/ namespace
