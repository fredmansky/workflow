<?php

return [
    //
    // Email Messages
    //

    'workflow_publisher_notification_heading' => 'When an editor submits entry for approval:',
    'workflow_publisher_notification_subject' => '"{{ submission.ownerTitle }}" has been submitted for approval on {{ submission.getOwnerSite() }}.',
    'workflow_publisher_notification_body' => "Hey {{ user.friendlyName }},\n\n" .
        "{{ review.user }} has submitted the entry \"{{ submission.ownerTitle }}\" for approval on {{ submission.ownerSite }}.\n\n" .
        "{% if review.notes %}{{ review.roleName }} Notes: \"{{ review.notes }}\"\n\n{% endif %}" .
        "To review it please log into your control panel.\n\n" .
        "{{ submission.owner.cpEditUrl }}",

    'workflow_editor_review_notification_heading' => 'When a reviewer approves or rejects an editor submission:',
    'workflow_editor_review_notification_subject' => 'Your submission for "{{ submission.ownerTitle }}" has been {{ review.status }} on {{ submission.ownerSite }}.',
    'workflow_editor_review_notification_body' => "Hey {{ user.friendlyName }},\n\n" .
        "Your submission for {{ submission.ownerTitle }} has been {{ review.status }} {{ review.dateCreated | date }} on {{ submission.ownerSite }}.\n\n" .
        "{% if review.notes %}{{ review.roleName }} Notes: \"{{ review.notes }}\"\n\n{% endif %}" .
        "View your submission by logging into your control panel.\n\n" .
        "{{ submission.owner.cpEditUrl }}",

    'workflow_editor_notification_heading' => 'When a publisher approves or rejects an editor submission:',
    'workflow_editor_notification_subject' => 'Your submission for "{{ submission.ownerTitle }}" has been {{ review.status }} on {{ submission.ownerSite }}.',
    'workflow_editor_notification_body' => "Hey {{ user.friendlyName }},\n\n" .
        "Your submission for {{ submission.ownerTitle }} has been {{ review.status }} {{ review.dateCreated | date }} on {{ submission.ownerSite }}.\n\n" .
        "{% if review.notes %}{{ review.roleName }} Notes: \"{{ review.notes }}\"\n\n{% endif %}" .
        "View your submission by logging into your control panel.\n\n" .
        "{{ submission.owner.cpEditUrl }}",

    'workflow_published_author_notification_heading' => 'When a publisher approves and publishes an entry to notify the entry author:',
    'workflow_published_author_notification_subject' => 'Your entry "{{ submission.ownerTitle }}" has been published on {{ submission.ownerSite }}.',
    'workflow_published_author_notification_body' => "Hey {{ user.friendlyName }},\n\n" .
        "Your entry {{ submission.ownerTitle }} has been published {{ review.dateCreated | date }} on {{ submission.ownerSite }}.\n\n" .
        "View your entry by logging into your control panel.\n\n" .
        "{{ submission.owner.cpEditUrl }}",

    'Close' => 'Close',
    'Approved' => 'Approved',
    'Pending' => 'Pending',
    'Rejected' => 'Rejected',
    'Revoked' => 'Revoked',
    'Editor' => 'Editor',
    'Reviewer' => 'Reviewer',
    'Publisher' => 'Publisher',
    'Submission' => 'Submission',
    'All submissions' => 'All submissions',
    'Entry' => 'Entry',
    'Site' => 'Site',
    'Last Reviewed By' => 'Last Reviewed By',
    'Last Reviewed' => 'Last Reviewed',
    'Date Submitted' => 'Date Submitted',
    'Status' => 'Status',
    'Notes' => 'Notes',
    '[Deleted element' => '[Deleted element]',
    'Set Status' => 'Set Status',
    'Could not update status due to a validation error.' => 'Could not update status due to a validation error.',
    'Could not update statuses due to validation errors.' => 'Could not update statuses due to validation errors.',
    'Status updated, with some failures due to validation errors.' => 'Status updated, with some failures due to validation errors.',
    'Status updated.' => 'Status updated.',
    'Statuses updated.' => 'Statuses updated.',
    'Workflow' => 'Workflow',
    'Settings' => 'Settings',
    'General Settings' => 'General Settings',
    'Notifications' => 'Notifications',
    'Permissions' => 'Permissions',
    'Editor Notifications' => 'Editor Notifications',
    'Whether email notifications should be delivered to individual editors when approved or rejected.' => 'Whether email notifications should be delivered to individual editors when approved or rejected.',
    'Editor Notifications - Additional Options' => 'Editor Notifications - Additional Options',
    'Whether editor notifications should include the reviewer‘s or publisher‘s email whose triggered the action.' => 'Whether editor notifications should include the reviewer‘s or publisher‘s email whose triggered the action.',
    'Reply-To Reviewer Email' => 'Reply-To Reviewer Email',
    'CC Reviewer Email' => 'CC Reviewer Email',
    'Reply-To Publisher Email' => 'Reply-To Publisher Email',
    'CC Publisher Email' => 'CC Publisher Email',
    'Reviewer Notifications' => 'Reviewer Notifications',
    'Whether email notifications should be delivered to reviewers when editors submit an entry for review.' => 'Whether email notifications should be delivered to reviewers when editors submit an entry for review.',
    'Reviewer Approval Notifications' => 'Reviewer Approval Notifications',
    'Whether email notifications should be delivered to editors when each reviewer approves an entry after review.' => 'Whether email notifications should be delivered to editors when each reviewer approves an entry after review.',
    'Publisher Notifications' => 'Publisher Notifications',
    'Whether email notifications should be delivered to publishers when editors submit an entry for review.' => 'Whether email notifications should be delivered to publishers when editors submit an entry for review.',
    'Publishers To Receive Notifications' => 'Publishers To Receive Notifications',
    'Select all, or specific publishers to receive email notifications. By default, all will be notified.' => 'Select all, or specific publishers to receive email notifications. By default, all will be notified.',
    'Published Author Notifications' => 'Published Author Notifications',
    'Whether email notifications should be delivered to the entry author when approved and published by a Publisher.' => 'Whether email notifications should be delivered to the entry author when approved and published by a Publisher.',
    'Select a Publisher User Group first.' => 'Select a Publisher User Group first.',
    'None' => 'None',
    'Editor User Group' => 'Editor User Group',
    'Select the user group that your editors belong to. Editors are users that can edit content, but not publish live.' => 'Select the user group that your editors belong to. Editors are users that can edit content, but not publish live.',
    'Editor Submission Notes Required' => 'Editor Submission Notes Required',
    'Whether editors are required to enter a note in their submissions.' => 'Whether editors are required to enter a note in their submissions.',
    'User Group' => 'User Group',
    'Reviewer User Groups' => 'Reviewer User Groups',
    'Select the user groups that your reviewers belong to. Reviewers are users that can review and edit submissions and pass them along for approval, but not publish live. The review process flows from the first to the last user group in the table.' => 'Select the user groups that your reviewers belong to. Reviewers are users that can review and edit submissions and pass them along for approval, but not publish live. The review process flows from the first to the last user group in the table.',
    'Add a user group' => 'Add a user group',
    'Changing this may result in submissions being lost in the review process.' => 'Changing this may result in submissions being lost in the review process.',
    'Publisher User Group' => 'Publisher User Group',
    'Select the user group that your publishers belong to. Publishers are users who are notified when an editor submits content for review, and can approve content to be published live.' => 'Select the user group that your publishers belong to. Publishers are users who are notified when an editor submits content for review, and can approve content to be published live.',
    'Publisher Submission Notes Required' => 'Publisher Submission Notes Required',
    'Whether publishers are required to enter a note in their submissions.' => 'Whether publishers are required to enter a note in their submissions.',
    'Lock Draft Submissions' => 'Lock Draft Submissions',
    'Whether an entry should be locked for editing after it‘s been submitted for review.' => 'Whether an entry should be locked for editing after it‘s been submitted for review.',
    'Enabled Sections' => 'Enabled Sections',
    'Select which sections the workflow should be enabled for.' => 'Select which sections the workflow should be enabled for.',
    'Overview' => 'Overview',
    'Set status' => 'Set status',
    'Are you sure you want to delete this submission?' => 'Are you sure you want to delete this submission?',
    'Total Reviews' => 'Total Reviews',
    'Total Changes' => 'Total Changes',
    'Number of Reviewers' => 'Number of Reviewers',
    'created' => 'created',
    'Action #{num}' => 'Action #{num}',
    'Actions' => 'Actions',
    'Compare' => 'Compare',
    'Are you sure you want to delete this review?' => 'Are you sure you want to delete this review?',
    '{status} this submission on {date}.' => '{status} this submission on {date}.',
    '{role} Notes: “{note}”' => '{role} Notes: “{note}”',
    'No reviews for this submission.' => 'No reviews for this submission.',
    'Submission ID' => 'Submission ID',
    'Awaiting approval' => 'Awaiting approval',
    'submitted this entry for review on {date}. Please review this entry before approving' => 'submitted this entry for review on {date}. Please review this entry before approving',
    'Approve and publish' => 'Approve and publish',
    'Approve only' => 'Approve only',
    'Reject' => 'Reject',
    'Submission on {date}.' => 'Submission on {date}.',
    '{status} submission' => '{status} submission',
    'View changes' => 'View changes',
    'Awaiting review' => 'Awaiting review',
    'Notes about your response.' => 'Notes about your response.',
    'Approve' => 'Approve',
    'This entry was submitted for review on {date} and is awaiting approval. Changes cannot be made until approved.' => 'This entry was submitted for review on {date} and is awaiting approval. Changes cannot be made until approved.',
    'Submit for review' => 'Submit for review',
    'Submitting this entry for review will lock further edits and notify the next editors in the approval process that this entry is ready for approval.' => 'Submitting this entry for review will lock further edits and notify the next editors in the approval process that this entry is ready for approval.',
    'Save draft and submit for review' => 'Save draft and submit for review',
    'Revoke submission' => 'Revoke submission',
    'No submissions.' => 'No submissions.',
    'Show submissions for certain status.' => 'Show submissions for certain status.',
    'This content has been added.' => 'This content has been added.',
    'This content has been changed.' => 'This content has been changed.',
    'This content has been removed.' => 'This content has been removed.',
    'Unable to save submission.' => 'Unable to save submission.',
    'Comment saved successfully.' => 'Comment saved successfully.',
    'Unable to delete submission.' => 'Unable to delete submission.',
    'Submission deleted.' => 'Submission deleted.',
    'Unable to delete review.' => 'Unable to delete review.',
    'Review deleted.' => 'Review deleted.',
    'View submissions' => 'View submissions',
    'Unable to edit entry once it has been submitted for review.' => 'Unable to edit entry once it has been submitted for review.',
    'Could not submit for approval.' => 'Could not submit for approval.',
    'Could not save review.' => 'Could not save review.',
    'Entry submitted for approval.' => 'Entry submitted for approval.',
    'Could not revoke submission.' => 'Could not revoke submission.',
    'Submission revoked.' => 'Submission revoked.',
    'Submission approved.' => 'Submission approved.',
    'Submission rejected.' => 'Submission rejected.',
    'Could not approve and publish.' => 'Could not approve and publish.',
    'Entry approved and published.' => 'Entry approved and published.',
    'No submission with the ID “{id}”' => 'No submission with the ID “{id}”',
    'No review exists with the ID “{id}”.' => 'No review exists with the ID “{id}”.',
    'Workflow Submissions' => 'Workflow Submissions',
];