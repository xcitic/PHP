<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://my.netscape.com/rdf/simple/0.9/">
    <xsl:output method="html" indent="no" encoding="utf-8"/>

    <xsl:template match="/">
        <html>
        <head>
        <title>XSLT</title>
        </head>
        <body>

        <xsl:for-each select="/newsitems/news">
            News Item: <xsl:value-of select="title"/><br/>
        </xsl:for-each>
        </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
