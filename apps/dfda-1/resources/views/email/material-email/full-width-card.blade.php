<?php /** @var App\Models\WpPost $post */ ?>
<!-- START CARD 1 -->
<tr>
    <td width="100%" valign="top" align="center" class="padding-container"
        style="padding-top: 0px!important; padding-bottom: 18px!important; mso-padding-alt: 0px 0px 18px 0px;">
        <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="wrapper">
            <tr>
                <td>
                    <table cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td style="border-radius: 3px; border-bottom: 2px solid #d4d4d4;" class="card-1"
                                width="100%" valign="top" align="center">
                                <table style="border-radius: 3px;" width="600" cellpadding="0" cellspacing="0"
                                       border="0" align="center" class="wrapper" bgcolor="#ffffff">
                                    <tr>
                                        <td align="center">
                                            <table width="600" cellpadding="0" cellspacing="0" border="0"
                                                   class="container">
                                                <!-- START HEADER IMAGE -->
                                                <tr>
                                                    <td align="center" class="hund ripplelink" width="600">
                                                        <img align="center" width="600"
                                                             style="border-radius: 3px 3px 0px 0px; width: 100%; max-width: 600px!important"
                                                             class="hund"
                                                             src=" {{ $post->image ??  "http://paulgoddarddesign.com/emails/images/material-design/material.gif" }}">
                                                    </td>
                                                </tr>
                                                <!-- END HEADER IMAGE -->
                                                <!-- START BODY COPY -->
                                                <tr>
                                                    <td class="td-padding" align="left"
                                                        style="font-family: 'Roboto Mono', monospace; color: #212121!important; font-size: 24px; line-height: 30px; padding-top: 18px; padding-left: 18px!important; padding-right: 18px!important; padding-bottom: 0px!important; mso-line-height-rule: exactly; mso-padding-alt: 18px 18px 0px 13px;">
                                                        {{ $post->post_title ??  "Post Title Should Be Here" }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td-padding" align="left"
                                                        style="font-family: 'Roboto Mono', monospace; color: #212121!important; font-size: 16px; line-height: 24px; padding-top: 18px; padding-left: 18px!important; padding-right: 18px!important; padding-bottom: 0px!important; mso-line-height-rule: exactly; mso-padding-alt: 18px 18px 0px 18px;">
                                                        {{ $post->post_excerpt ??  "Post Excerpt Should Be Here" }}
                                                    </td>
                                                </tr>
                                                <!-- END BODY COPY -->
                                                <!-- BUTTON -->
                                                <tr>
                                                    <td align="left"
                                                        style="padding: 18px 18px 18px 18px; mso-alt-padding: 18px 18px 18px 18px!important;">
                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                            <tr>
                                                                <td>
                                                                    <table border="0" cellspacing="0" cellpadding="0">
                                                                        <tr>
                                                                            <td align="left" style="border-radius: 3px;"
                                                                                bgcolor="#17bef7">
                                                                                <a class="button raised"
                                                                                   href="{{ $post->guid }}"
                                                                                   target="_blank"
                                                                                   style="font-size: 14px; line-height: 14px; font-weight: 500; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; border-radius: 3px; padding: 10px 25px; border: 1px solid #17bef7; display: inline-block;">MORE DETAILS</a>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <!-- END BUTTON -->
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </td>
</tr>
<!-- END CARD 1 -->