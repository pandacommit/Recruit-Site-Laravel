<p>{{ $mailData['companyName'] }}様</p>

<p>兵庫県自動車整備振興会の求人掲載情報が{{ $mailData['expirationDate'] }} に期限切れになることをお知らせする通知です。</p>

<p>掲載を延長するには、次のリンクをクリックしてください。</p>

<a href="{{ route('home', ['token' => $token]) }}">掲載期間の延長（30日） </a>

<p>※本メールは送信専用アドレスから自動送信されています。返信はできません。</p>
<p>兵庫県自動車整備振興会　求人サイト</p>








