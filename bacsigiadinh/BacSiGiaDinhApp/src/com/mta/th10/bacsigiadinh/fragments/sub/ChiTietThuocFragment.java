package com.mta.th10.bacsigiadinh.fragments.sub;

import com.koushikdutta.urlimageviewhelper.UrlImageViewHelper;
import com.mta.th10.bacsigiadinh.R;
import com.mta.th10.bacsigiadinh.db.BenhDB;
import com.mta.th10.bacsigiadinh.db.ThuocDB;

import android.os.Bundle;
import android.support.v4.app.Fragment;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageButton;
import android.widget.ImageView;
import android.widget.TextView;
import mta.th10.bacsigiadinh.interfaces.ITitleFragment;
import mta.th10.bacsigiadinh.models.Thuoc;

public class ChiTietThuocFragment extends Fragment implements ITitleFragment {
	private Thuoc thuoc;
	private ImageButton bt;
	public ChiTietThuocFragment(Thuoc thuoc) {
		this.thuoc = thuoc;
	}

	@Override
	public View onCreateView(LayoutInflater inflater, ViewGroup container, Bundle savedInstanceState) {
		View v = inflater.inflate(R.layout.fragment_chitietthuoc, null);
		TextView txt_ten = (TextView) v.findViewById(R.id.txt_chitiet_ten);
		TextView txt_cachdung = (TextView) v.findViewById(R.id.txt_chitiet_cachdung);
		TextView txt_lieuluong = (TextView) v.findViewById(R.id.txt_chitiet_lieuluong);
		TextView txt_tacdung = (TextView) v.findViewById(R.id.txt_chitiet_tacdung);
		bt = (ImageButton) v.findViewById(R.id.bt_set_fav_thuoc);
		
		bt.setOnClickListener(new View.OnClickListener() {
			@Override
			public void onClick(View v) {
				// Update favoriate
				if (thuoc.isFavorite())
				{
					ThuocDB.setFavorite(thuoc, false);
					thuoc.setFavorite(false);
					bt.setImageResource(R.drawable.ic_fav_no);
				}
				else
				{
					thuoc.setFavorite(true);
					ThuocDB.setFavorite(thuoc, true);
					bt.setImageResource(R.drawable.ic_fav_on);
				}
			}
		});

		if (this.thuoc.isFavorite())
			bt.setImageResource(R.drawable.ic_fav_on);
		else
			bt.setImageResource(R.drawable.ic_fav_no);

		
		txt_ten.setText(thuoc.getTenThuoc());
		txt_cachdung.setText(thuoc.getChiDinh());
		txt_lieuluong.setText(thuoc.getLieuLuong());
		txt_tacdung.setText(thuoc.getTacDungPhu());
		
		if(thuoc.getImg() != null && thuoc.getImg().length() > 2)
		{
			ImageView image = (ImageView) v.findViewById(R.id.img_chitietthuoc);
			UrlImageViewHelper.setUrlDrawable(image, thuoc.getImg());
		}
		
		return v;
	}

	@Override
	public String getTitle() {
		return this.thuoc.getTenThuoc();
	}
}
