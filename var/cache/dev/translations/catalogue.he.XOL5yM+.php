<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('he', array (
  'validators' => 
  array (
    'This value should be false.' => 'הערך צריך להיות שקר.',
    'This value should be true.' => 'הערך צריך להיות אמת.',
    'This value should be of type {{ type }}.' => 'הערך צריך להיות מסוג {{ type }}.',
    'This value should be blank.' => 'הערך צריך להיות ריק.',
    'The value you selected is not a valid choice.' => 'הערך שבחרת אינו חוקי.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'אתה צריך לבחור לפחות {{ limit }} אפשרויות.|אתה צריך לבחור לפחות {{ limit }} אפשרויות.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'אתה צריך לבחור לכל היותר {{ limit }} אפשרויות.|אתה צריך לבחור לכל היותר {{ limit }} אפשרויות.',
    'One or more of the given values is invalid.' => 'אחד או יותר מהערכים אינו חוקי.',
    'This field was not expected.' => 'שדה זה לא היה צפוי',
    'This field is missing.' => 'שדה זה חסר.',
    'This value is not a valid date.' => 'הערך אינו תאריך חוקי.',
    'This value is not a valid datetime.' => 'הערך אינו תאריך ושעה חוקיים.',
    'This value is not a valid email address.' => 'כתובת המייל אינה תקינה.',
    'The file could not be found.' => 'הקובץ לא נמצא.',
    'The file is not readable.' => 'לא ניתן לקרוא את הקובץ.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'הקובץ גדול מדי ({{ size }} {{ suffix }}). הגודל המרבי המותר הוא {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'סוג MIME של הקובץ אינו חוקי ({{ type }}). מותרים סוגי MIME {{ types }}.',
    'This value should be {{ limit }} or less.' => 'הערך צריך להכיל {{ limit }} תווים לכל היותר.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'הערך ארוך מידי. הוא צריך להכיל {{ limit }} תווים לכל היותר.|הערך ארוך מידי. הוא צריך להכיל {{ limit }} תווים לכל היותר.',
    'This value should be {{ limit }} or more.' => 'הערך צריך להכיל {{ limit }} תווים לפחות.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'הערך קצר מידי. הוא צריך להכיל {{ limit }} תווים לפחות.|הערך קצר מידיץ הוא צריך להכיל {{ limit }} תווים לפחות.',
    'This value should not be blank.' => 'הערך לא אמור להיות ריק.',
    'This value should not be null.' => 'הערך לא אמור להיות ריק.',
    'This value should be null.' => 'הערך צריך להיות ריק.',
    'This value is not valid.' => 'הערך אינו חוקי.',
    'This value is not a valid time.' => 'הערך אינו זמן תקין.',
    'This value is not a valid URL.' => 'זאת אינה כתובת אתר תקינה.',
    'The two values should be equal.' => 'שני הערכים צריכים להיות שווים.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'הקובץ גדול מדי. הגודל המרבי המותר הוא {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'הקובץ גדול מדי.',
    'The file could not be uploaded.' => 'לא ניתן לעלות את הקובץ.',
    'This value should be a valid number.' => 'הערך צריך להיות מספר חוקי.',
    'This file is not a valid image.' => 'הקובץ הזה אינו תמונה תקינה.',
    'This is not a valid IP address.' => 'זו אינה כתובת IP חוקית.',
    'This value is not a valid language.' => 'הערך אינו שפה חוקית.',
    'This value is not a valid locale.' => 'הערך אינו אזור תקף.',
    'This value is not a valid country.' => 'הערך אינו ארץ חוקית.',
    'This value is already used.' => 'הערך כבר בשימוש.',
    'The size of the image could not be detected.' => 'לא ניתן לקבוע את גודל התמונה.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'רוחב התמונה גדול מדי ({{ width }}px). הרוחב המקסימלי הוא {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'רוחב התמונה קטן מדי ({{ width }}px). הרוחב המינימלי הוא {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'גובה התמונה גדול מדי ({{ height }}px). הגובה המקסימלי הוא {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'גובה התמונה קטן מדי ({{ height }}px). הגובה המינימלי הוא {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'הערך צריך להיות סיסמת המשתמש הנוכחי.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'הערך צריך להיות בדיוק {{ limit }} תווים.|הערך צריך להיות בדיוק {{ limit }} תווים.',
    'The file was only partially uploaded.' => 'הקובץ הועלה באופן חלקי.',
    'No file was uploaded.' => 'הקובץ לא הועלה.',
    'No temporary folder was configured in php.ini.' => 'לא הוגדרה תיקייה זמנית ב php.ini.',
    'Cannot write temporary file to disk.' => 'לא ניתן לכתוב קובץ זמני לדיסק.',
    'A PHP extension caused the upload to fail.' => 'סיומת PHP גרם להעלאה להיכשל.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'האוסף אמור להכיל {{ limit }} אלמנטים או יותר.|האוסף אמור להכיל {{ limit }} אלמנטים או יותר.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'האוסף אמור להכיל {{ limit }} אלמנטים או פחות.|האוסף אמור להכיל {{ limit }} אלמנטים או פחות.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'האוסף צריך להכיל בדיוק {{ limit }} אלמנטים.|האוסף צריך להכיל בדיוק {{ limit }} אלמנטים.',
    'Invalid card number.' => 'מספר הכרטיס אינו חוקי.',
    'Unsupported card type or invalid card number.' => 'סוג הכרטיס אינו נתמך או לא חוקי.',
    'This is not a valid International Bank Account Number (IBAN).' => 'מספר חשבון בנק בינלאומי אינו חוקי (IBAN).',
    'This value is not a valid ISBN-10.' => 'הערך אינו ערך ISBN-10 חוקי.',
    'This value is not a valid ISBN-13.' => 'הערך אינו ערך ISBN-13 חוקי.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'הערך אינו ערך ISBN-10 חוקי או ערך ISBN-13 חוקי.',
    'This value is not a valid ISSN.' => 'הערך אינו ערך ISSN חוקי.',
    'This value is not a valid currency.' => 'הערך אינו ערך מטבע חוקי.',
    'This value should be equal to {{ compared_value }}.' => 'הערך חייב להיות שווה ל {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'הערך חייב להיות גדול מ {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'הערך חייב להיות גדול או שווה ל {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'הערך חייב להיות זהה ל {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'הערך חייב להיות קטן מ {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'הערך חייב להיות קטן או שווה ל {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'הערך חייב להיות לא שווה ל {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'הערך חייב להיות לא זהה ל {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'היחס של התמונה הוא גדול מדי ({{ ratio }}). היחס המקסימלי האפשרי הוא {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'היחס של התמונה הוא קטן מדי ({{ ratio }}). היחס המינימלי האפשרי הוא {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'התמונה מרובעת ({{ width }}x{{ height }}px). אסורות תמונות מרובעות.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'התמונה היא לרוחב ({{ width }}x{{ height }}px). אסורות תמונות לרוחב.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'התמונה היא לאורך ({{ width }}x{{ height }}px). אסורות תמונות לאורך.',
    'An empty file is not allowed.' => 'אסור קובץ ריק.',
    'The host could not be resolved.' => 'לא הייתה אפשרות לזהות את המארח.',
    'This value does not match the expected {{ charset }} charset.' => 'הערך אינו תואם למערך התווים {{ charset }} הצפוי.',
    'This is not a valid Business Identifier Code (BIC).' => 'קוד זיהוי עסקי אינו חוקי (BIC).',
    'Error' => 'שגיאה',
    'This is not a valid UUID.' => 'הערך אינו ערך UUID חוקי.',
    'This value should be a multiple of {{ compared_value }}.' => 'הערך חייב להיות כפולה של {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'הקוד זיהוי עסקי (BIC) אינו משוייך ל IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'הערך אינו ערך JSON תקין.',
    'This collection should contain only unique elements.' => 'האוסף חייב להכיל רק אלמנטים ייחודיים.',
    'This value should be positive.' => 'הערך חייב להיות חיובי.',
    'This value should be either positive or zero.' => 'הערך חייב להיות חיובי או אפס.',
    'This value should be negative.' => 'הערך חייב להיות שלילי.',
    'This value should be either negative or zero.' => 'הערך חייב להיות שלילי או אפס.',
    'This value is not a valid timezone.' => 'הערך אינו אזור זמן תקין.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'סיסמא זו הודלפה בהדלפת מידע, אסור להשתמש בה. אנא השתמש בסיסמה אחרת.',
    'This value should be between {{ min }} and {{ max }}.' => 'הערך חייב להיות בין {{ min }} ו- {{ max }}.',
    'This form should not contain extra fields.' => 'הטופס לא צריך להכיל שדות נוספים.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'הקובץ שהועלה גדול מדי. נסה להעלות קובץ קטן יותר.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'אסימון CSRF אינו חוקי. אנא נסה לשלוח שוב את הטופס.',
    'fos_user.username.already_used' => 'שם המשתמש טפוס ע"ל משתמש אחר',
    'fos_user.username.blank' => 'יש להזין שם משתמש',
    'fos_user.username.short' => 'שם המשתמש קצר מדי',
    'fos_user.username.long' => 'שם המשתמש ארוך מדי',
    'fos_user.email.already_used' => 'כתובת דואר אלקטרוני תפוסה',
    'fos_user.email.blank' => 'יש להזין כתובת דואר אלקטרוני',
    'fos_user.email.short' => 'כתובת הדוא"ל קצרה מדי',
    'fos_user.email.long' => 'כתובת הדוא"ל ארוכה מדי',
    'fos_user.email.invalid' => 'הדוא\\"ל אינו תקין',
    'fos_user.password.blank' => 'יש להזין סיסמה',
    'fos_user.password.short' => 'הסיסמה קצרה מדי',
    'fos_user.password.mismatch' => 'אין התאמה בין סיסמאות',
    'fos_user.new_password.blank' => 'יש להזין סיסמה חדשה',
    'fos_user.new_password.short' => 'סיסמה החדשה קצרה מדי',
    'fos_user.current_password.invalid' => 'הסיסמה שגויה',
    'fos_user.group.blank' => 'יש להזין שם קבוצה',
    'fos_user.group.short' => 'שם קצר מדי',
    'fos_user.group.long' => 'שם ארוך מדי',
    'fos_group.name.already_used' => 'שם קבוצה בשימוש',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'Digest nonce has expired.' => 'Digest nonce has expired.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'עדכן קבוצה',
    'group.show.name' => 'שם קבוצה',
    'group.new.submit' => 'צור קבומה',
    'group.flash.updated' => 'הקבוצה עודכנה בהצלחה',
    'group.flash.created' => 'הקבוצה נוצרה בהצלחה',
    'group.flash.deleted' => 'הקבוצה נמחקה בהצלחה',
    'security.login.username' => 'שם משתמש',
    'security.login.password' => 'סיסמה',
    'security.login.remember_me' => 'זכור אותי',
    'security.login.submit' => 'התחבר',
    'profile.show.username' => 'שם משתמש',
    'profile.show.email' => 'דוא"ל',
    'profile.edit.submit' => 'עדכון',
    'profile.flash.updated' => 'הפרופיל עודכן בהצלחה',
    'change_password.submit' => 'שינוי סיסמה',
    'change_password.flash.success' => 'הסיסמה שונתה בהצלחה.',
    'registration.check_email' => 'הודעה בדוא"ל נשלחה ל-%email%. ההודעה מכילה קישור להפעלת חשבון משתמש שלך. יש ללחוץ על הקישור כדי להפעיל את החשבון.',
    'registration.confirmed' => 'ברוכים הבאים %username%, חשבון שלך הופעל.',
    'registration.back' => 'השב לדף הקודם.',
    'registration.submit' => 'הרשם',
    'registration.flash.user_created' => 'המשתמש נוצר בהצלחה',
    'registration.email.subject' => 'שלום %username%!',
    'registration.email.message' => '%username% שלום רב,

כדי לסיים הרשמתך יש ללחוץ על קישור זה:  %confirmationUrl%

זה קישור חד-פעמי לאמת סיסמתך.

בברכה,
   הצוות.
',
    'resetting.check_email' => 'הודעת דוא"ל נשלחה. ההודעה מכילה קישור לאיפוס סיסמה שלך.

ניתן לבקש איפוס סיסמה תוך %tokenLifetime% שעות.

יש לבדוק תיקיים דואר זבל במידע ולא הגיעה ההודעה.
',
    'resetting.request.username' => 'שם משתמש או דואר אלקטרוני',
    'resetting.request.submit' => 'איפוס סיסמה',
    'resetting.reset.submit' => 'שינוי סיסמה',
    'resetting.flash.success' => 'הסיסמה אופסה בהצלחה',
    'resetting.email.subject' => 'איפוס סיסמה',
    'resetting.email.message' => '%username% שלום רב,

כדי לאפס סיסמה שלך יש ללחוץ %confirmationUrl%

בברכה,
   הצוות.
',
    'layout.logout' => 'התנתק',
    'layout.login' => 'כניסה',
    'layout.register' => 'רישום',
    'layout.logged_in_as' => 'שלום %username%',
    'form.group_name' => 'שם קבוצה',
    'form.username' => 'שם משתמש',
    'form.email' => 'דוא\\"ל',
    'form.current_password' => 'סיסמה נוכחות',
    'form.password' => 'סיסמה',
    'form.password_confirmation' => 'אימות סיסמה',
    'form.new_password' => 'סיסמה חדשה',
    'form.new_password_confirmation' => 'אימות סיסמה חדשה',
  ),
));

$catalogueFr = new MessageCatalogue('fr', array (
  'validators' => 
  array (
    'This value should be false.' => 'Cette valeur doit être fausse.',
    'This value should be true.' => 'Cette valeur doit être vraie.',
    'This value should be of type {{ type }}.' => 'Cette valeur doit être de type {{ type }}.',
    'This value should be blank.' => 'Cette valeur doit être vide.',
    'The value you selected is not a valid choice.' => 'Cette valeur doit être l\'un des choix proposés.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Vous devez sélectionner au moins {{ limit }} choix.|Vous devez sélectionner au moins {{ limit }} choix.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Vous devez sélectionner au maximum {{ limit }} choix.|Vous devez sélectionner au maximum {{ limit }} choix.',
    'One or more of the given values is invalid.' => 'Une ou plusieurs des valeurs soumises sont invalides.',
    'This field was not expected.' => 'Ce champ n\'a pas été prévu.',
    'This field is missing.' => 'Ce champ est manquant.',
    'This value is not a valid date.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid datetime.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid email address.' => 'Cette valeur n\'est pas une adresse email valide.',
    'The file could not be found.' => 'Le fichier n\'a pas été trouvé.',
    'The file is not readable.' => 'Le fichier n\'est pas lisible.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux ({{ size }} {{ suffix }}). Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Le type du fichier est invalide ({{ type }}). Les types autorisés sont {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Cette valeur doit être inférieure ou égale à {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractère.|Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractères.',
    'This value should be {{ limit }} or more.' => 'Cette valeur doit être supérieure ou égale à {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractère.|Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractères.',
    'This value should not be blank.' => 'Cette valeur ne doit pas être vide.',
    'This value should not be null.' => 'Cette valeur ne doit pas être nulle.',
    'This value should be null.' => 'Cette valeur doit être nulle.',
    'This value is not valid.' => 'Cette valeur n\'est pas valide.',
    'This value is not a valid time.' => 'Cette valeur n\'est pas une heure valide.',
    'This value is not a valid URL.' => 'Cette valeur n\'est pas une URL valide.',
    'The two values should be equal.' => 'Les deux valeurs doivent être identiques.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux. Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Le fichier est trop volumineux.',
    'The file could not be uploaded.' => 'Le téléchargement de ce fichier est impossible.',
    'This value should be a valid number.' => 'Cette valeur doit être un nombre.',
    'This file is not a valid image.' => 'Ce fichier n\'est pas une image valide.',
    'This is not a valid IP address.' => 'Cette adresse IP n\'est pas valide.',
    'This value is not a valid language.' => 'Cette langue n\'est pas valide.',
    'This value is not a valid locale.' => 'Ce paramètre régional n\'est pas valide.',
    'This value is not a valid country.' => 'Ce pays n\'est pas valide.',
    'This value is already used.' => 'Cette valeur est déjà utilisée.',
    'The size of the image could not be detected.' => 'La taille de l\'image n\'a pas pu être détectée.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'La largeur de l\'image est trop grande ({{ width }}px). La largeur maximale autorisée est de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'La largeur de l\'image est trop petite ({{ width }}px). La largeur minimale attendue est de {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La hauteur de l\'image est trop grande ({{ height }}px). La hauteur maximale autorisée est de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La hauteur de l\'image est trop petite ({{ height }}px). La hauteur minimale attendue est de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Cette valeur doit être le mot de passe actuel de l\'utilisateur.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Cette chaîne doit avoir exactement {{ limit }} caractère.|Cette chaîne doit avoir exactement {{ limit }} caractères.',
    'The file was only partially uploaded.' => 'Le fichier a été partiellement transféré.',
    'No file was uploaded.' => 'Aucun fichier n\'a été transféré.',
    'No temporary folder was configured in php.ini.' => 'Aucun répertoire temporaire n\'a été configuré dans le php.ini.',
    'Cannot write temporary file to disk.' => 'Impossible d\'écrire le fichier temporaire sur le disque.',
    'A PHP extension caused the upload to fail.' => 'Une extension PHP a empêché le transfert du fichier.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Cette collection doit contenir {{ limit }} élément ou plus.|Cette collection doit contenir {{ limit }} éléments ou plus.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Cette collection doit contenir {{ limit }} élément ou moins.|Cette collection doit contenir {{ limit }} éléments ou moins.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Cette collection doit contenir exactement {{ limit }} élément.|Cette collection doit contenir exactement {{ limit }} éléments.',
    'Invalid card number.' => 'Numéro de carte invalide.',
    'Unsupported card type or invalid card number.' => 'Type de carte non supporté ou numéro invalide.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Le numéro IBAN (International Bank Account Number) saisi n\'est pas valide.',
    'This value is not a valid ISBN-10.' => 'Cette valeur n\'est pas un code ISBN-10 valide.',
    'This value is not a valid ISBN-13.' => 'Cette valeur n\'est pas un code ISBN-13 valide.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Cette valeur n\'est ni un code ISBN-10, ni un code ISBN-13 valide.',
    'This value is not a valid ISSN.' => 'Cette valeur n\'est pas un code ISSN valide.',
    'This value is not a valid currency.' => 'Cette valeur n\'est pas une devise valide.',
    'This value should be equal to {{ compared_value }}.' => 'Cette valeur doit être égale à {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Cette valeur doit être supérieure à {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Cette valeur doit être supérieure ou égale à {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur doit être identique à {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Cette valeur doit être inférieure à {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Cette valeur doit être inférieure ou égale à {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Cette valeur ne doit pas être égale à {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur ne doit pas être identique à {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop grand ({{ ratio }}). Le rapport maximal autorisé est {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop petit ({{ ratio }}). Le rapport minimal attendu est {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'L\'image est carrée ({{ width }}x{{ height }}px). Les images carrées ne sont pas autorisées.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'L\'image est au format paysage ({{ width }}x{{ height }}px). Les images au format paysage ne sont pas autorisées.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'L\'image est au format portrait ({{ width }}x{{ height }}px). Les images au format portrait ne sont pas autorisées.',
    'An empty file is not allowed.' => 'Un fichier vide n\'est pas autorisé.',
    'The host could not be resolved.' => 'Le nom de domaine n\'a pas pu être résolu.',
    'This value does not match the expected {{ charset }} charset.' => 'Cette valeur ne correspond pas au jeu de caractères {{ charset }} attendu.',
    'This is not a valid Business Identifier Code (BIC).' => 'Ce n\'est pas un code universel d\'identification des banques (BIC) valide.',
    'Error' => 'Erreur',
    'This is not a valid UUID.' => 'Ceci n\'est pas un UUID valide.',
    'This value should be a multiple of {{ compared_value }}.' => 'Cette valeur doit être un multiple de {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Ce code d\'identification d\'entreprise (BIC) n\'est pas associé à l\'IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Cette valeur doit être un JSON valide.',
    'This collection should contain only unique elements.' => 'Cette collection ne doit pas comporter de doublons.',
    'This value should be positive.' => 'Cette valeur doit être strictement positive.',
    'This value should be either positive or zero.' => 'Cette valeur doit être supérieure ou égale à zéro.',
    'This value should be negative.' => 'Cette valeur doit être strictement négative.',
    'This value should be either negative or zero.' => 'Cette valeur doit être inférieure ou égale à zéro.',
    'This value is not a valid timezone.' => 'Cette valeur n\'est pas un fuseau horaire valide.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Ce mot de passe a été divulgué lors d\'une fuite de données, il ne doit plus être utilisé. Veuillez utiliser un autre mot de passe.',
    'This value should be between {{ min }} and {{ max }}.' => 'Cette valeur doit être comprise entre {{ min }} et {{ max }}.',
    'This form should not contain extra fields.' => 'Ce formulaire ne doit pas contenir des champs supplémentaires.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Le fichier téléchargé est trop volumineux. Merci d\'essayer d\'envoyer un fichier plus petit.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Le jeton CSRF est invalide. Veuillez renvoyer le formulaire.',
    'fos_user.username.already_used' => 'Le nom d\'utilisateur est déjà utilisé.',
    'fos_user.username.blank' => 'Entrez un nom d\'utilisateur s\'il vous plait.',
    'fos_user.username.short' => 'Le nom d\'utilisateur est trop court.',
    'fos_user.username.long' => 'Le nom d\'utilisateur est trop long.',
    'fos_user.email.already_used' => 'L\'adresse e-mail est déjà utilisée.',
    'fos_user.email.blank' => 'Entrez une adresse e-mail s\'il vous plait.',
    'fos_user.email.short' => 'L\'adresse e-mail est trop courte.',
    'fos_user.email.long' => 'L\'adresse e-mail est trop longue.',
    'fos_user.email.invalid' => 'L\'adresse e-mail est invalide.',
    'fos_user.password.blank' => 'Entrez un mot de passe s\'il vous plait.',
    'fos_user.password.short' => 'Le mot de passe est trop court.',
    'fos_user.password.mismatch' => 'Les deux mots de passe ne sont pas identiques.',
    'fos_user.new_password.blank' => 'Entrez un nouveau mot de passe s\'il vous plait.',
    'fos_user.new_password.short' => 'Le nouveau mot de passe est trop court.',
    'fos_user.current_password.invalid' => 'Le mot de passe est invalide.',
    'fos_user.group.blank' => 'Entrez un nom s\'il vous plait.',
    'fos_user.group.short' => 'Le nom est trop court.',
    'fos_user.group.long' => 'Le nom est trop long.',
    'fos_group.name.already_used' => 'Le nom est déjà utilisé.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Une exception d\'authentification s\'est produite.',
    'Authentication credentials could not be found.' => 'Les identifiants d\'authentification n\'ont pas pu être trouvés.',
    'Authentication request could not be processed due to a system problem.' => 'La requête d\'authentification n\'a pas pu être executée à cause d\'un problème système.',
    'Invalid credentials.' => 'Identifiants invalides.',
    'Cookie has already been used by someone else.' => 'Le cookie a déjà été utilisé par quelqu\'un d\'autre.',
    'Not privileged to request the resource.' => 'Privilèges insuffisants pour accéder à la ressource.',
    'Invalid CSRF token.' => 'Jeton CSRF invalide.',
    'Digest nonce has expired.' => 'Le digest nonce a expiré.',
    'No authentication provider found to support the authentication token.' => 'Aucun fournisseur d\'authentification n\'a été trouvé pour supporter le jeton d\'authentification.',
    'No session available, it either timed out or cookies are not enabled.' => 'Aucune session disponible, celle-ci a expiré ou les cookies ne sont pas activés.',
    'No token could be found.' => 'Aucun jeton n\'a pu être trouvé.',
    'Username could not be found.' => 'Le nom d\'utilisateur n\'a pas pu être trouvé.',
    'Account has expired.' => 'Le compte a expiré.',
    'Credentials have expired.' => 'Les identifiants ont expiré.',
    'Account is disabled.' => 'Le compte est désactivé.',
    'Account is locked.' => 'Le compte est bloqué.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Mettre à jour le groupe',
    'group.show.name' => 'Nom du groupe',
    'group.new.submit' => 'Créer le groupe',
    'group.flash.updated' => 'Le groupe a été mis à jour.',
    'group.flash.created' => 'Le groupe a été créé.',
    'group.flash.deleted' => 'Le groupe a été supprimé.',
    'security.login.username' => 'Nom d\'utilisateur',
    'security.login.password' => 'Mot de passe',
    'security.login.remember_me' => 'Se souvenir de moi',
    'security.login.submit' => 'Connexion',
    'profile.show.username' => 'Nom d\'utilisateur',
    'profile.show.email' => 'Adresse e-mail',
    'profile.edit.submit' => 'Mettre à jour',
    'profile.flash.updated' => 'Le profil a été mis à jour.',
    'change_password.submit' => 'Modifier le mot de passe',
    'change_password.flash.success' => 'Le mot de passe a été modifié.',
    'registration.check_email' => 'Un e-mail a été envoyé à l\'adresse %email%. Il contient un lien d\'activation sur lequel il vous faudra cliquer afin d\'activer votre compte.',
    'registration.confirmed' => 'Félicitations %username%, votre compte est maintenant activé.',
    'registration.back' => 'Retour à la page d\'origine.',
    'registration.submit' => 'Créer un compte',
    'registration.flash.user_created' => 'L\'utilisateur a été créé avec succès.',
    'registration.email.subject' => 'Bienvenue %username% !',
    'registration.email.message' => 'Bonjour %username% !

Pour valider votre compte utilisateur, merci de vous rendre sur %confirmationUrl%

Ce lien ne peut être utilisé qu\'une seule fois pour valider votre compte.

Cordialement,
L\'équipe
',
    'resetting.check_email' => 'Un e-mail a été envoyé. Il contient un lien sur lequel il vous faudra cliquer pour réinitialiser votre mot de passe.
Remarque : Vous ne pouvez demander un nouveau mot de passe que toutes les %tokenLifetime% heures.

Si vous ne recevez pas un email, vérifiez votre dossier spam ou essayez à nouveau.
',
    'resetting.request.username' => 'Nom d\'utilisateur ou adresse e-mail',
    'resetting.request.submit' => 'Réinitialiser le mot de passe',
    'resetting.reset.submit' => 'Modifier le mot de passe',
    'resetting.flash.success' => 'Le mot de passe a été réinitialisé avec succès.',
    'resetting.email.subject' => 'Réinitialisation de votre mot de passe',
    'resetting.email.message' => 'Bonjour %username% !

Pour réinitialiser votre mot de passe, merci de vous rendre sur %confirmationUrl%

Cordialement,
L\'équipe
',
    'layout.logout' => 'Déconnexion',
    'layout.login' => 'Connexion',
    'layout.register' => 'Inscription',
    'layout.logged_in_as' => 'Connecté en tant que %username%',
    'form.group_name' => 'Nom du groupe',
    'form.username' => 'Nom d\'utilisateur',
    'form.email' => 'Adresse e-mail',
    'form.current_password' => 'Mot de passe actuel',
    'form.password' => 'Mot de passe',
    'form.password_confirmation' => 'Répéter le mot de passe',
    'form.new_password' => 'Nouveau mot de passe',
    'form.new_password_confirmation' => 'Répéter le nouveau mot de passe',
  ),
  'EasyAdminBundle' => 
  array (
    'new.page_title' => 'Créer "%entity_name%"',
    'show.page_title' => '%entity_name% (#%entity_id%)',
    'edit.page_title' => 'Modifier %entity_name% (#%entity_id%)',
    'list.page_title' => '%entity_name%',
    'search.page_title' => '{0} Aucun résultat trouvé|{1} <strong>1</strong> résultat trouvé|]1,Inf] <strong>%count%</strong> résultats trouvés',
    'search.no_results' => 'Aucun résultat trouvé',
    'list.row_actions' => 'Actions',
    'paginator.first' => 'Premier',
    'paginator.previous' => 'Précédent',
    'paginator.next' => 'Suivant',
    'paginator.last' => 'Dernier',
    'paginator.counter' => '<strong>%start%</strong> - <strong>%end%</strong> sur <strong>%results%</strong>',
    'label.true' => 'Oui',
    'label.false' => 'Non',
    'label.empty' => 'Vide',
    'label.null' => 'Aucun(e)',
    'label.nullable_field' => 'Laisser vide',
    'label.object' => 'Objet PHP',
    'label.inaccessible' => 'Inaccessible',
    'label.inaccessible.explanation' => 'Aucun accesseur n\'existe pour cette propriété ou celle-ci n\'est pas publique.',
    'user.logged_in_as' => 'Connecté en tant que',
    'user.unnamed' => 'Utilisateur sans nom',
    'user.anonymous' => 'Utilisateur anonyme',
    'user.signout' => 'Déconnexion',
    'user.exit_impersonation' => 'Arrêter l\'impersonnalisation',
    'toggle_navigation' => 'Activer ou désactiver la navigation',
    'delete_modal.title' => 'Voulez-vous supprimer cet élément ?',
    'delete_modal.content' => 'Cette action est irréversible.',
    'delete_modal.action' => 'Supprimer',
    'action.add_new_item' => 'Ajouter un nouvel élément',
    'action.add_another_item' => 'Ajouter un autre élément',
    'action.remove_item' => 'Supprimer l\'élément',
    'errors' => 'Erreur|Erreurs',
    'form.are_you_sure' => 'Vous n\'avez pas sauvegardé vos modifications.',
    'show.remaining_items' => '{1} il y a un autre élément qui n\'est pas affiché dans cette liste|]1,Inf] %count% autres éléments ne sont pas affichés dans cette liste',
    'exception.entity_not_found' => 'Cet élément n\'est plus disponible.',
    'exception.entity_remove' => 'Cet élément ne peut être supprimé car d\'autres éléments en dépendent.',
    'exception.forbidden_action' => 'L\'action demandée ne peut être exécutée sur cet élément.',
    'exception.no_entities_configured' => 'L\'application n\'est pas correctement configurée.',
    'exception.undefined_entity' => 'L\'application n\'est pas correctement configurée pour ce type d\'élément.',
  ),
  'messages' => 
  array (
    'action.new' => 'Créer %entity_name%',
    'action.show' => 'Voir',
    'action.edit' => 'Éditer',
    'action.search' => 'Rechercher',
    'action.delete' => 'Supprimer',
    'action.save' => 'Sauvegarder les modifications',
    'action.cancel' => 'Annuler',
    'action.list' => 'Retour à la liste',
    'label.form.empty_value' => 'Aucun(e)',
    '__name__label__' => '__name__label__',
  ),
));
$catalogue->addFallbackCatalogue($catalogueFr);

return $catalogue;
