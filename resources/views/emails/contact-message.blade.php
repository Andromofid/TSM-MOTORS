<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Nouveau message TSM Motors</title>
</head>

<body style="margin: 0; padding: 0; background: #111111; color: #f5f5f5; font-family: Arial, sans-serif;">
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="background: #111111; padding: 32px 16px;">
        <tr>
            <td align="center">
                <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="max-width: 640px; overflow: hidden; border: 1px solid #2a2a2a; border-radius: 20px; background: #181818;">
                    <tr>
                        <td style="padding: 28px 28px 16px;">
                            <p style="margin: 0 0 8px; color: #ef4444; font-size: 12px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase;">
                                TSM Motors Contact
                            </p>

                            <h1 style="margin: 0; color: #ffffff; font-size: 28px; line-height: 1.2;">
                                Nouveau message reçu
                            </h1>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 12px 28px;">
                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="border-collapse: collapse;">
                                <tr>
                                    <td style="padding: 12px 0; color: #9ca3af; font-size: 13px; width: 120px;">Nom</td>
                                    <td style="padding: 12px 0; color: #ffffff; font-size: 15px; font-weight: 700;">{{ $data['name'] }}</td>
                                </tr>

                                <tr>
                                    <td style="padding: 12px 0; color: #9ca3af; font-size: 13px;">Email</td>
                                    <td style="padding: 12px 0; color: #ffffff; font-size: 15px;">{{ $data['email'] }}</td>
                                </tr>

                                <tr>
                                    <td style="padding: 12px 0; color: #9ca3af; font-size: 13px;">Téléphone</td>
                                    <td style="padding: 12px 0; color: #ffffff; font-size: 15px;">{{ $data['phone'] ?: 'Non renseigné' }}</td>
                                </tr>

                                <tr>
                                    <td style="padding: 12px 0; color: #9ca3af; font-size: 13px;">Sujet</td>
                                    <td style="padding: 12px 0; color: #ffffff; font-size: 15px;">{{ $data['subject'] ?: 'Contact TSM Motors' }}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 16px 28px 32px;">
                            <div style="border-radius: 16px; background: #0b0b0b; padding: 20px; color: #e5e7eb; font-size: 15px; line-height: 1.7;">
                                {!! nl2br(e($data['message'])) !!}
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
